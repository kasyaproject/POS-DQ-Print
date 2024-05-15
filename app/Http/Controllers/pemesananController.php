<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\preorder;
use App\Models\customer;

class pemesananController extends Controller
{
    //
    public function index(Request $request)
    {      
        $search = $request->input('search');

        if (!empty($search)) {
            $order = preorder::where('id', 'like', "%$search%")
                        ->orWhere('kode_invoice', 'like', "%$search%")
                        ->orWhere('kode_produk', 'like', "%$search%")
                        ->paginate(20);
        } else {
            $order = preorder::paginate(20);
        }

        if ($request->ajax()) {
            if (!empty($search)) {
                $customers = Customer::where('nama_cust', 'like', "%$search%")
                                     ->orWhere('no_telp', 'like', "%$search%")
                                     ->get();
            } else {
                $customers = Customer::all();
            }
            return response()->json($customers);
        }

        return view('pemesanan.index', compact('order', 'search'));
    }
}
