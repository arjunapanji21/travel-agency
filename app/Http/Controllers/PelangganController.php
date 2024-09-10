<?php

namespace App\Http\Controllers;

use App\Models\DataPelanggan;
use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(){
        $props = [
            'title' => 'Pelanggan',
            'data' => DataPelanggan::orderBy('nama', 'asc')->get(),
        ];
        return view('dashboard.index_data_pelanggan', $props);
    }
    public function create(){
        $props = [
            'title' => 'Pelanggan',            
        ];
        return view('dashboard.create_data_pelanggan', $props);
    }
    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);

        try {
            $user_id = User::create([
                'nama' => $request['nama'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'role' => 'user',
            ])->id;
    
            DataPelanggan::create([
                'user_id' => $user_id,
                'nama' => $request['nama'],
                'alamat' => $request['alamat'],
                'no_telp' => $request['no_telp'],
            ]);
        } catch (\Throwable $th) {
            return back()->with('error', 'Registrasi akun gagal, silahkan coba lagi.');
        }
        return redirect()->route('index_data_pelanggan')->with('success', 'Berhasil menambah data pelanggan.');
    }
}
