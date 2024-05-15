<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\customer;

class customerController extends Controller
{
    //
    public function index(Request $request)
    {      
        $search = $request->input('search');

        if (!empty($search)) {
            $cust = customer::where('nama_cust', 'like', "%$search%")
                        ->orWhere('no_telp', 'like', "%$search%")
                        ->paginate(20);
        } else {
            $cust = customer::paginate(20);
        }

        return view('customer.index', compact('cust', 'search'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_cust' => 'required',
            'no_telp' => 'required|unique:customers',
        ]); 

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Data gagal disimpan');
        }

        $cust = new customer();
        $cust->nama_cust = $request->input('nama_cust');
        $cust->no_telp = $request->input('no_telp');
        $cust->save();

        return redirect()->back()->with('success','data berhasil disimpan');
    }

    public function create()
    {
        
    }

    public function update(Request $request, $id_cust)
    {
        $cust = customer::find($id_cust);

        if (!$cust) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
    
        // Validasi data dari formulir
        $request->validate([
            'nama_cust' => 'required',
            'no_telp' => 'required|unique:customers,no_telp,'.$id_cust,
        ]);
    
        // Simpan perubahan data 
        $cust->nama_cust = $request->input('nama_cust');
        $cust->no_telp = $request->input('no_telp');
        $cust->save();
    
        return redirect()->back()->with('success-update','data berhasil diperbarui.');
    }

    public function destroy($id_cust)
    {
        $cust = customer::find($id_cust);

        if (!$cust) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $cust->delete();

        return redirect()->back()->with('success-delete', 'Data berhasil dihapus !');
    }
}
