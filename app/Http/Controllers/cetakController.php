<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\preorder;
use Illuminate\Http\Request;

class cetakController extends Controller
{
    //
    public function index(Request $request)
    {
        $search = $request->input('search');

        $order = Preorder::whereHas('statusOrder', function ($query) {
            $query->where('info_status', 'proses cetak');
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

        return view('cetak.index', compact('order', 'search'));
    }

    public function update($id)
    {
        $preorder = Preorder::find($id);
        $waktu_cetak = Carbon::now();

        $preorder->statusOrder()->update(['info_status' => "Proses Finishing"]);
        $preorder->statusOrder()->update(['id_operator' => "1"]);
        $preorder->statusOrder()->update(['waktu_operator' => $waktu_cetak]);
        $preorder->save();

        return redirect()->route('cetak.index')->with('success', 'data berhasil diupdate');
    }
}
