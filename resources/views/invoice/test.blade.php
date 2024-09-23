<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - Tokopedia Style</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .invoice {
            background-color: #fff;
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #3f51b5;
            color: #fff;
            padding: 10px 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .company-name {
            font-size: 24px;
            font-weight: bold;
        }
        .invoice-details {
            text-align: right;
        }
        .invoice-details p {
            margin: 5px 0;
            font-size: 14px;
        }
        .invoice-header {
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .invoice-header h1 {
            font-size: 24px;
            color: #333;
            margin: 0;
        }
        .invoice-header p {
            margin: 5px 0;
            color: #666;
        }
        .invoice-details {
            margin-bottom: 20px;
        }
        .invoice-details p {
            margin: 5px 0;
        }
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .invoice-table th, .invoice-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .invoice-table th {
            background-color: #f2f2f2;
        }
        .invoice-total {
            margin-top: 20px;
            text-align: right;
        }
        .invoice-total p {
            margin: 5px 0;
            font-weight: bold;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            color: #888;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="invoice">
        <div class="header">
            <div class="company-name">Your Company Name</div>
            <div class="invoice-details">
                <p>Invoice Number: INV-001</p>
                <p>Date: June 14, 2024</p>
                <p>Due Date: June 30, 2024</p>
            </div>
        </div>
        <div class="invoice-details">
            <p><strong>Bill To:</strong></p>
            <p>John Doe</p>
            <p>Email: john.doe@example.com</p>
        </div>
        <table class="invoice-table">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Product A</td>
                    <td>1</td>
                    <td>$50.00</td>
                    <td>$50.00</td>
                </tr>
                <tr>
                    <td>Product B</td>
                    <td>2</td>
                    <td>$25.00</td>
                    <td>$50.00</td>
                </tr>
            </tbody>
        </table>
        <div class="invoice-total">
            <p><strong>Total Amount:</strong> $100.00</p>
        </div>
        <div class="footer">
            <p>Thank you for your purchase!</p>
        </div>
    </div>
</body>
</html>
