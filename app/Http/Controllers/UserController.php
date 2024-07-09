<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $dataUser = User::all();
        $batasBuku = Role::all();

        return view('Admin/anggota', [
            'data_anggota' => $dataUser,
            'batas_buku' => $batasBuku
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'no_anggota' => 'required|max:25',
            'nama' => 'required|max:255',
            'password' => 'required|min:8',
            'email' => 'required|max:255',
            'status' => 'required',
            'id_role' => 'required'
        ]);

        User::create([
            'no_anggota' => $request->no_anggota,
            'nama' => $request->nama,
            'password' => Hash::make($validated['password']),
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'jabatan' => $request->jabatan,
            'peran' => $request->peran,
            'jurusan' => $request->jurusan,
            'status' => $request->status,
            'id_role' => $request->id_role,
            $validated
        ]);

        return redirect('admin/anggota')->with('status', 'Anggota Berhasil Ditambahkan');
    }

    public function update(Request $request, $id){
        $dataAnggota = User::find($id);

        $dataAnggota->no_anggota = $request->no_anggota;
        $dataAnggota->nama = $request->nama;
        $dataAnggota->password = $request->password;
        $dataAnggota->email = $request->email;
        $dataAnggota->alamat = $request->alamat;
        $dataAnggota->no_hp = $request->no_hp;
        $dataAnggota->jabatan = $request->jabatan;
        $dataAnggota->peran = $request->peran;
        $dataAnggota->jurusan = $request->jurusan;
        $dataAnggota->status = $request->status;
        $dataAnggota->id_role = $request->id_role;

        $dataAnggota->save();

        return redirect('admin/anggota')->with('status', 'Anggota Berhasil Diedit');
    }

    public function delete($id){

        $deleteAnggota = User::find($id);

        if ($deleteAnggota->delete()){
            return redirect()->back()->with('status', 'Anggota Berhasil Dihapus');
        }
    }
}
