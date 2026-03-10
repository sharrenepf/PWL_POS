<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // 1. Menampilkan semua data user beserta relasi levelnya
    public function index()
    {
        // Eager Loading biar query-nya gak berat
        $user = UserModel::with('level')->get();
        return view('user', ['data' => $user]);
    }

    // 2. Menampilkan form tambah
    public function tambah()
    {
        return view('user_tambah');
    }

    // 3. Menyimpan data baru (Create)
    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'nama'     => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);

        return redirect('/user');
    }

    // 4. Menampilkan form ubah berdasarkan ID
    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    // 5. Menyimpan perubahan data (Update)
    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make($request->password);
        $user->level_id = $request->level_id;

        $user->save();

        return redirect('/user');
    }

    // 6. Menghapus data user (Delete)
    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}