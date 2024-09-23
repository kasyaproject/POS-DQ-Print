<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\invoice;
use App\Models\preorder;
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\View;
use function Spatie\LaravelPdf\Support\pdf;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class invoiceController extends Controller
{
    //
    public function index(Request $request)
    {
        $search = $request->input('search');

        $invoices = Invoice::orderBy('created_at', 'desc')->get();
        //dd($invoices);

        return view('invoice.index', compact('invoices', 'search'));
    }

    public function show($url, $id)
    {
        // Mengambil invoice beserta preorders yang berelasi
        $invoices = invoice::where('URL', $url)->get();
        $preorders = preorder::where('kode_invoice', $id)->get();

        $totalqty = $preorders->sum('qty');
        $totalpembelian = $preorders->sum('harga_total');
        //dd($totalqty, $totalpembelian);

        // Mengirim data ke view
        return view('invoice.detail', compact('invoices', 'preorders', 'totalqty', 'totalpembelian'));
    }

    public function generatePdf($url, $id)
    {
        // Mengambil invoice berdasarkan URL
        $invoices = Invoice::where('URL', $url)->get();

        // Mengambil nomor invoice
        $nomer = $invoices->pluck('no_invoice')->first();

        // Mengambil preorder berdasarkan kode_invoice
        $preorders = Preorder::where('kode_invoice', $id)->get();

        // Menghitung total qty dan total pembelian dari preorder
        $totalqty = $preorders->sum('qty');
        $totalpembelian = $preorders->sum('harga_total');

        // Generate Tampilan untuk pdf
        //$html = view::make('invoice.cetakPdf', compact('invoices', 'preorders', 'totalqty', 'totalpembelian'))->render();
        $html = view::make('invoice.cetakPdf', compact('invoices', 'preorders', 'totalqty', 'totalpembelian'))->render();

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);

        // set ukuran 
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF (output)
        $dompdf->render();

        // Output PDF
        return $dompdf->stream($nomer . '.pdf');
    }

    // public function generatePdf($url, $id)
    // {
    //     try {
    //         // Mengambil invoice berdasarkan URL
    //         $invoices = Invoice::where('URL', $url)->get();

    //         // Mengambil nomor invoice
    //         $nomer = $invoices->pluck('no_invoice')->first();

    //         // Mengambil preorder berdasarkan kode_invoice
    //         $preorders = Preorder::where('kode_invoice', $id)->get();

    //         // Menghitung total qty dan total pembelian dari preorder
    //         $totalqty = $preorders->sum('qty');
    //         $totalpembelian = $preorders->sum('harga_total');

    //         // Generate HTML content from view
    //         $htmlContent = View::make('invoice.cetakPdf', compact('invoices', 'preorders', 'totalqty', 'totalpembelian'))->render();

    //         // Path where the PDF will be saved
    //         $pdfPath = public_path($nomer . '.pdf'); // Adjust the path as needed

    //         // Define the path for the temporary directory
    //         $tempDir = public_path('temp'); // Ensure this directory exists and is writable

    //         // Ensure the temporary directory exists
    //         if (!file_exists($tempDir)) {
    //             mkdir($tempDir, 0777, true);
    //         }

    //         // Generate PDF using Browsershot
    //         Browsershot::html($htmlContent)
    //             ->setNodeBinary('C:\Program Files\nodejs\node.exe')
    //             ->setNpmBinary('C:\Program Files\nodejs\npm.cmd')
    //             ->setOption('userDataDir', $tempDir) // Set the custom temp directory
    //             ->save($pdfPath);

    //         // Return the generated PDF as a download response
    //         return response()->download($pdfPath);
    //     } catch (\Exception $e) {
    //         // Log the error message for debugging
    //         \Log::error('Error generating PDF: ' . $e->getMessage());

    //         // Return a response indicating failure
    //         return response()->json(['error' => 'Failed to generate PDF'], 500);
    //     }
    // }
}
