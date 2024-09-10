<?php

namespace App\Http\Controllers;

use App\Models\DataPelanggan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        if(!Auth::check()){
            return view('login');
        }
        return redirect()->route('dashboard');
    }

    public function registrasi(){
        if(!Auth::check()){
            return view('Registrasi');
        }
        return redirect()->route('dashboard');
    }

    public function create_new_user(Request $request){
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

            if (Auth::attempt([
                'email' => $request['email'],
                'password' => $request['password'],
            ])) {
                $request->session()->regenerate();
                return redirect(route('dashboard'));
            }

        } catch (\Throwable $th) {
            return back()->with('error', 'Registrasi akun gagal, silahkan coba lagi.');
        }
    }

    public function reset_password(){
        $props = [
            'title' => "Reset Password",
        ];
        return view('auth.reset_password', $props);
    }
    
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(route('dashboard'));
        }
        return back()->with(['error', 'Login failed!']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('welcome'));
    }
}
