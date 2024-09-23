<?php

namespace App\Http\Controllers;

use App\Models\preorder;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class desainController extends Controller
{
    //
    public function index(Request $request)
    {
        $search = $request->input('search');

        $order = Preorder::whereHas('statusOrder', function ($query) {
            $query->where('info_status', 'proses desain');
        })->when($search, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('nama_produk', 'like', "%$search%")
                    ->orWhereHas('Customer', function ($query) use ($search) {
                        $query->where('nama_cust', 'like', "%$search%");
                    })
                    ->orWhereHas('invoiceinfo', function ($query) use ($search) {
                        $query->where('no_invoice', 'like', "%$search%")
                            ->orWhere('tanggal_jadi', 'like', "%$search%")
                            ->orWhere('waktu_jadi', 'like', "%$search%");
                    })
                    ->join('status_orders', 'preorders.id_status', '=', 'status_orders.id')
                    ->orderBy('status_orders.waktu_bayar', 'desc')
                    ->select('preorders.*') // Memilih kolom dari tabel preorders untuk menghindari konflik kolom
                    ->paginate(20);
            });
        })->join('status_orders', 'preorders.id_status', '=', 'status_orders.id')
            ->orderBy('status_orders.waktu_bayar', 'desc')
            ->select('preorders.*') // Memilih kolom dari tabel preorders untuk menghindari konflik kolom
            ->paginate(20);

        return view('desain.index', compact('order', 'search'));
    }

    public function update($id)
    {
        $preorder = Preorder::find($id);
        $waktu_desain = Carbon::now();

        $preorder->statusOrder()->update(['info_status' => "Proses Cetak"]);
        $preorder->statusOrder()->update(['id_design' => "1"]);
        $preorder->statusOrder()->update(['waktu_design' => $waktu_desain]);
        $preorder->save();

        return redirect()->route('desain.index')->with('success', 'data berhasil diupdate');
    }
}
