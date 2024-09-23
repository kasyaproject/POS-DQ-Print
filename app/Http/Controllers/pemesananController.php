<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\invoice;
use App\Models\customer;
use App\Models\preorder;
use App\Models\status_order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class pemesananController extends Controller
{
    //
    public function index(Request $request)
    {
        $search = $request->input('search');

        if (!empty($search)) {
            $order = preorder::where('nama_produk', 'like', "%$search%")
                ->orWhereHas('Customer', function ($query) use ($search) {
                    $query->where('nama_cust', 'like', "%$search%");
                })
                ->orWhereHas('invoiceinfo', function ($query) use ($search) {
                    $query->where('no_invoice', 'like', "%$search%")
                        ->orWhere('tanggal_jadi', 'like', "%$search%")
                        ->orWhere('waktu_jadi', 'like', "%$search%");
                })
                ->join('invoices', 'preorders.kode_invoice', '=', 'invoices.id')
                ->orderBy('invoices.no_invoice', 'desc')
                ->select('preorders.*') // Memilih kolom dari tabel preorders untuk menghindari konflik kolom
                ->paginate(20);;
        } else {
            $order = Preorder::join('invoices', 'preorders.kode_invoice', '=', 'invoices.id')
                ->orderBy('invoices.no_invoice', 'desc')
                ->select('preorders.*') // Memilih kolom dari tabel preorders untuk menghindari konflik kolom
                ->paginate(20);
        }

        return view('pemesanan.index', compact('order', 'search'));
    }

    public function create(Request $request)
    {
        // Check if a search query is provided
        if ($request->has('search')) {
            $searchQuery = $request->input('search');

            // Query the database for customers matching the search query
            $customers = Customer::where('nama_cust', 'LIKE', "%{$searchQuery}%")
                ->orWhere('no_telp', 'LIKE', "%{$searchQuery}%")
                ->orderBy('nama_cust', 'asc')
                ->get();

            // Return the results as JSON and stop further processing
            return response()->json($customers);
        }

        // Generate Invoice Number
        $invoice = $this->generateInvoiceNumber();

        // Generate Resi Code
        $kode_resi = $this->generateResiCode();

        ////////////////// KATEGORI /////////////////////////////////////
        $A3 = Produk::where('kategori', 'like', '%A3+%')->orderBy('nama_produk', 'asc')->get();
        $outdoor = Produk::where('kategori', 'like', '%Outdoor%')->orderBy('nama_produk', 'asc')->get();
        $indoor = Produk::where('kategori', 'like', '%Indoor%')->orderBy('nama_produk', 'asc')->get();

        return view('pemesanan.add', compact('invoice', 'kode_resi', 'A3', 'outdoor', 'indoor'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'no_invoice' => 'required|unique:invoices',
            'id_cust' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Data gagal disimpan');
        }

        ///////////////////////// MEMBUAT INVOICE BARU /////////////////////////////////
        $invoice = new invoice();
        $invoice->no_invoice = $request->input('no_invoice');
        $invoice->id_cust = $request->input('id_cust');
        $invoice->id_pj = 1; // ganti dengan user login
        $invoice->tanggal_jadi = $request->input('tanggaljadi');
        $invoice->waktu_jadi = $request->input('jamjadi');
        $invoice->save();

        ///////////////////////// MEMBUAT PREORDER BARU /////////////////////////////////
        foreach ($request->produk as $data) {
            ///////////////////////// MEMBUAT STATUS ORDER BARU /////////////////////////////////
            $status = new status_order();
            $status->info_status = 'Menunggu Pembayaran';
            $status->save();

            // generate nomer resi, kode invoice, dan status order
            $kode_resi = $this->generateResiCode();
            $kode_invoice = invoice::count();
            $satus_order = status_order::count();

            $preorder = new Preorder();
            $preorder->kode_invoice = $kode_invoice;
            $preorder->no_resi = $kode_resi;
            $preorder->id_cust = $request->input('id_cust');
            $preorder->id_pj = 1; //ganti user pembuat fomr

            $preorder->id_produk = $data['id_produk'];
            $preorder->kategori = $data['kategori'];
            $preorder->qty = $data['qty'];
            $preorder->harga_satuan = $data['harga'];
            $preorder->panjang = $data['panjang'];
            $preorder->lebar = $data['lebar'];

            // MENENTUKAN HARGA TOTAL PREORDER
            $m2 = $data['panjang'] *  $data['lebar'];
            if ($m2 < 1) {
                $m2 = 1;
            }
            $total = $data['harga'] * $m2;
            // END MENENTUKAN HARGA TOTAL PREORDER

            $preorder->harga_total = $total;
            $preorder->keterangan = $data['keterangan'] ?? null;
            $preorder->tanggal_jadi = $request->input('tanggaljadi');
            $preorder->waktu_jadi = $request->input('jamjadi');
            $preorder->id_status = $satus_order;
            $preorder->save();
        }

        return redirect()->route('pemesanan.index')->with('success', 'data berhasil disimpan');
    }

    public function update($id)
    {
        $preorder = Preorder::find($id);
        $waktu_bayar = Carbon::now();

        $preorder->statusOrder()->update(['info_status' => "Proses Desain"]);
        $preorder->statusOrder()->update(['id_kasir' => "1"]); //ganti degan user id
        $preorder->statusOrder()->update(['waktu_bayar' => $waktu_bayar]);
        $preorder->save();

        return redirect()->route('pemesanan.index')->with('success', 'data berhasil diupdate');
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function generateInvoiceNumber()
    {
        $count_invoice = Invoice::count();
        $next_invoice = str_pad($count_invoice + 1, 5, '0', STR_PAD_LEFT);
        return 'DQP-' . $next_invoice;
    }

    public function generateResiCode()
    {
        $number_order = Preorder::count();
        $next_order = str_pad($number_order + 1, 4, '0', STR_PAD_LEFT);

        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $length = 8;
        $resi = '';
        for ($i = 0; $i < $length; $i++) {
            $resi .= $characters[rand(0, strlen($characters) - 1)];
        }

        return 'DQP' . $next_order . '-' . $resi;
    }

    public function getProductsByKategori($kategori)
    {
        $products = Produk::where('kategori', 'like', '%' . $kategori . '%')->orderBy('nama_produk', 'asc')->get();
        return response()->json($products);
    }

    public function getHargaProduk($id_produk)
    {
        // Asumsikan Anda memiliki model Produk yang terkait dengan tabel produk
        $produk = Produk::where('kode_produk', $id_produk)->first();

        if ($produk) {
            return response()->json([
                'harga' => $produk->harga,
                'hargaBB' => $produk->hargaBB,
                'qty' => $produk->qty
            ]);
        }

        return response()->json([
            'harga' => '',
            'hargaBB' => '',
            'qty' => ''
        ], 404);
    }

    public function getPj($id)
    {
        $PJ = Preorder::with(['invoiceinfo', 'statusOrder.kasir', 'statusOrder.desain', 'statusOrder.operator', 'statusOrder.finishing', 'customer'])->findOrFail($id);

        return response()->json($PJ);
    }
}
