<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class penggunaController extends Controller
{
    //
    public function index(Request $request)
    {
        $search = $request->input('search');

        if (!empty($search)) {
            $pengguna = User::where('nama', 'like', "%$search%")
                        ->orWhere('nik', 'like', "%$search%")
                        ->orWhere('email', 'like', "%$search%")
                        ->orWhere('jabatan', 'like', "%$search%")
                        ->paginate(10);
        } else {
            $pengguna = User::paginate(10);
        }

        return view('pengguna.index', compact('pengguna', 'search'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'nik' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|max:16',
            'jabatan' => 'required',
        ]); 

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Data gagal disimpan');
        }

        $akun = new User();
        $akun->nama = $request->input('nama');
        $akun->nik = $request->input('nik');
        $akun->email = $request->input('email');
        $akun->password = $request->input('password');
        $akun->jabatan = $request->input('jabatan');
        $akun->save();

        return redirect()->back()->with('success','data berhasil disimpan');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id_user)
    {
        $user = User::findOrFail($id_user);

        if (!$user) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
    
        // Validasi data dari formulir
        $request->validate([
            'nama' => 'required',
            'nik' => 'required|unique:users,nik,'.$id_user,
            'email' => 'required|unique:users,email,'.$id_user,
            'jabatan' => 'required',
        ]);
    
        // Simpan perubahan data (termasuk jika hanya ada perubahan pada 'name', 'email', atau 'akses')
        $user->nama = $request->input('nama');
        $user->nik = $request->input('nik');
        $user->email = $request->input('email');
        $user->jabatan = $request->input('jabatan');
        // Update data lainnya sesuai kebutuhan
        $user->save();
    
        return redirect()->back()->with('success-update','data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        $user->delete();

        return redirect()->back()->with('success-delete', 'Data berhasil dihapus !');
    }
}
