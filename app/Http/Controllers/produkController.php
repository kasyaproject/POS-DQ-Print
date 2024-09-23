<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\Validator;

class produkController extends Controller
{
    //
    public function index()
    {
        $produk = Produk::all();
        $A3 = Produk::where('kategori', 'like', '%A3+%')->orderBy('nama_produk', 'asc')->get();
        $outdoor = Produk::where('kategori', 'like', '%Outdoor%')->orderBy('nama_produk', 'asc')->get();
        $indoor = Produk::where('kategori', 'like', '%Indoor%')->orderBy('nama_produk', 'asc')->get();

        return view('produk.index', compact('produk', 'A3', 'outdoor', 'indoor'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required|unique:produks',
            'qty' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Data gagal disimpan');
        }

        $produk = new produk();
        $produk->nama_produk = $request->input('nama_produk');
        $produk->qty = $request->input('qty');
        $produk->harga = $request->input('harga');
        $produk->kategori = $request->input('kategori');
        $produk->save();

        return redirect()->back()->with('success', 'data berhasil disimpan');
    }

    public function show($id)
    {
    }

    public function opname(Request $request)
    {
        foreach ($request->produk as $data) {
            $produk = Produk::findOrFail($data['kode_produk']);

            $produk->update($data);
        }

        return redirect()->back()->with('success', 'Produk berhasil diperbarui');
    }

    public function update(Request $request, $kode_produk)
    {
        $produk = produk::where('kode_produk', '=', $kode_produk)->first();


        if (!$produk) {
            return redirect('/akun-add')->with('error', 'Data tidak ditemukan.');
        }

        // Validasi data dari formulir
        $request->validate([
            'nama_produk' => 'required|unique:produks,nama_produk,' . $kode_produk . ',kode_produk', // Menyertakan nama kolom kunci primer
            'qty' => 'required',
            'harga' => 'required',
        ]);

        // Simpan perubahan data (termasuk jika hanya ada perubahan pada 'name', 'email', atau 'akses')
        $produk->nama_produk = $request->input('nama_produk');
        $produk->qty = $request->input('qty');
        $produk->harga = $request->input('harga');
        $produk->save();

        return redirect()->back()->with('success-update', 'data berhasil diperbarui.');
    }

    public function destroy($kode_produk)
    {
        $produk = produk::where('kode_produk', '=', $kode_produk)->first();

        if (!$produk) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $produk->delete();

        return redirect()->back()->with('success-delete', 'Data berhasil dihapus !');
    }
}
