<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice | Daqu Printing</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('/build/LEMONMILK-RegularItalic.otf') }}" rel="stylesheet" />
    
    <!-- Scripts -->

    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
        }
        @font-face {
            font-family: 'LemonMilk';
            src: url('{{ asset('/build/LEMONMILK-RegularItalic.otf') }}') format('opentype');
            font-weight: normal;
            font-style: normal;
        }
        .font-cursive {
            font-family: 'Bold';
        }
        .invoice-container {
            max-width: 800px; 
        }        
        .footer,
        .main {
            margin-left: auto;
            margin-right: auto;
            padding-left: 2rem;
            padding-right: 2rem;
        }
        .header {
            width: 100%;
            justify-content: space-between;
            align-items: center;
        }
        .header .title {
            font-size: 2.25rem;
            font-weight: 700;
            background: linear-gradient(90deg, blue, red,yellow);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: 'LemonMilk';
        }
        .header .invoice-info {
            text-align: right;
            font-size: 1.125rem;
            font-weight: 600;
        }
        .header .invoice-info .invoice-number {
            margin-top: -1.35rem;
            font-weight: 300;
            color: #60a5fa;
        }
        .details {
            width: 100%;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            margin-top: -2rem;
        }
        .details .left,
        .details .right {
            width: 50%;
        }
        .details .right {
            padding-left: 4rem;
        }
        .details table,
        .details td {
            font-size: 0.875rem;
        }
        .details .title {
            font-weight: bold;
            margin-bottom: 0.25rem;
            font-size: 1rem;
        }
        .details .value {
            font-weight: 600;
        }
        .details .coma{
            padding-left: 1.5rem;
            padding-right: 0.5rem;
        }

        .items {
            margin-top: 2rem;
        }
        .items table {
            width: 100%;
            font-size: 0.875rem;
            text-align: left;
        }
        .items th {
            background-color: #e5e7eb;
            text-transform: uppercase;
            padding: 0.5rem;
            padding-left: 1rem;
        }
        .items td {
            padding: 0.75rem;
            border-bottom: 1px solid #e5e7eb;
        }
        .items .title,
        .items .item-detail {
            text-align: center;
        }
        .items .product-name {
            font-size: 1rem;
            font-weight: 600;
            color: #1d4ed8;
        }
        .items .product-details {
            font-size: 0.65rem;
            color: #6b7280;
            margin-top: -1rem;
        }


        .totals {
            width: 100%;
            justify-content: space-between;
            margin-bottom: 0.5rem;
            margin-top: 0.5rem;
        }
        .totals .right {
            width: 60%;
            margin-bottom: 1rem;
            font-size: 1rem;
            padding-left: 7.75rem;
        }
        .totals .right .bold,
        .totals .right .bold-mid td {
            font-weight: bold;
            font-size: 1rem;
        }
        .totals .right table {
            width: 100%;
            border-collapse: collapse;
        }
        .totals .right .bold td {
            padding-bottom: 1rem;
        }

        .totals .right .bold-mid td {
            padding-top: 1rem;
        }


        .footer {
            width: 100%;
            justify-content: space-between;
            padding-top: 0.5rem;
            border-top: 2px solid #e5e7eb;
            border-bottom: 2px solid #e5e7eb;
        }
        .footer .left,
        .footer .right {
            width: 50%;            
        }
        .footer .right-pembayaran {
            width: 50%;
            padding-left: 4rem;            
        }
        .footer .left .span{
            margin-top: -10px;
        }
        .footer .right-footer .span{ 
            text-align: end;
        }
        .footer .info {
            font-size: 0.75rem;
            color: #6b7280;
        }
        .footer .info-detail {
            margin-top: -10px;
            font-weight: 600;
        }

        .footer-end {
            width: 100%;
            border-collapse: collapse;
        }
        .footer-end .left-footer, .footer-end .right-footer {
            vertical-align: top;
            width: 50%;
            padding: 10px;
        }
        .footer-end .info {
            font-size: 0.75rem;
            color: #6b7280;            
        }
        .footer-end .info-span .highlight{
            font-weight: 600;
            color: #60a5fa;           
        }
        .footer-end .left-footer .info-span {
            font-size: 0.75rem;
            color: #6b7280;
            margin-top: -0.75rem;
        }
        .footer-end .right-footer {
            text-align: right; 
        }
        .footer-end .info-right {
            font-size: 0.75rem;
            color: #6b7280;
        }
        .footer-end .info-right .highlight {
            font-weight: 600;
            color: #60a5fa;
        }
    </style>
</head>
<body>
    <!-- MainBody -->
    <div class="invoice-container">
        @foreach ($invoices as $data)        
        <!-- Header -->
        <table class="header">
            <td class="title">
                <p>DAQU PRINTING</p>
            </td>    
            <td class="invoice-info">
                <p>INVOICE</p>
                <p class="invoice-number">{{ $data->no_invoice }}</p>
            </td> 
        </table>

        <table class="details">
            <td class="left">
                <p class="title">PENANGGUNG JAWAB</p>
                <table>
                    <tr>
                        <td>Nama Penanggung jawab</td>
                        <td class="coma">:</td>
                        <td class="value">{{ $data->user->nama }}</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                </table>
            </td>
            <td class="right">
                <p class="title">CUSTOMER</p>
                <table>
                    <tr>
                        <td>Nama Customer</td>
                        <td class="coma">:</td>
                        <td class="value">{{ $data->Customer->nama_cust }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Pemesanan</td>
                        <td class="coma">:</td>
                        <td class="value">{{ \Carbon\Carbon::parse($data->created_at)->format('d - M - Y') }}</td>
                    </tr>
                    <tr>
                        <td>No. Telp</td>
                        <td class="coma">:</td>
                        <td class="value">{{ $data->Customer->no_telp }}</td>
                    </tr>
                </table>
            </td>
        </table>      

        <!-- Body -->
        <div class="items">
            <div>                    
                <table>
                    <thead>
                        <tr class="title">
                            <th scope="col" >Nama Produk</th>
                            <th scope="col" >Jumlah</th>
                            <th scope="col" >Harga Satuan</th>
                            <th scope="col" >Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($preorders as $item)
                            <tr>
                                <th scope="row">
                                    <p class="product-name">{{ $item->nama_produk }} ( {{ $item->panjang }}x{{ $item->lebar }} )</p>
                                    <p class="product-details">finishing : {{ $item->keterangan }}</p>
                                </th>
                                <td class="item-detail">{{ $item->qty }}</td>
                                <td class="item-detail">Rp {{ $item->harga_satuan }}</td>
                                <td class="item-detail">Rp {{ $item->harga_total }}</td>
                            </tr>
                        @endforeach                            
                    </tbody>
                </table>
            </div>                
        </div>

        <table class="totals">
            <td class="left">                
            </td>
            <td class="right">
                <table>
                    <tr class="bold">
                        <td class="label">Total Harga ( {{ $totalqty }} Barang )</td>
                        <td class="value">Rp {{ $totalpembelian }}</td>
                    </tr>
                    <tr>
                        <td class="label">Pengiriman</td>
                        <td class="value">Rp -</td>
                    </tr>
                    <tr>
                        <td class="label">Jumlah Bayar</td>
                        <td class="value">Rp -</td>
                    </tr>
                    <tr>
                        <td class="label">Diskon</td>
                        <td class="value">Rp -</td>
                    </tr>
                    <tr class="bold-mid">
                        <td class="label">Total Belanja</td>
                        <td class="value">Rp {{ $totalpembelian }}</td>
                    </tr>
                    <tr class="bold">
                        <td class="label">Uang Belanja</td>
                        <td class="value">Rp {{ $totalpembelian }}</td>
                    </tr>
                    <tr>
                        <td class="label">Kembalian</td>
                        <td class="value">Rp -</td>
                    </tr>
                </table>
            </td>
        </table>

        <table class="footer">
            <td class="left"> 
                <p class="info">Kurir :</p>
                <p class="info-detail">-</p>              
            </td>
            <td class="right-pembayaran"> 
                <p class="info">Metode Pembayaran :</p>
                <p class="info-detail">Cash</p>               
            </td>
        </table>

        <table class="footer-end">
            <td class="left-footer"> 
                <p class="info">Invoice ini sah dan dibuat oleh komputer</p>
                <p class="info-span">Silakan hubungi <span class="highlight">Daqu Printing</span> apabila kamu membutuhkan bantuan.</p>            
            </td>
            <td class="right-footer"> 
                <p class="info-right">Terakhir diupdate: <span class="highlight">{{ \Carbon\Carbon::parse($data->updated_at)->format('d M Y H:i') }} WIB</span></p>              
            </td>
        </table>
        @endforeach        
    </div>
</body>
</html>
