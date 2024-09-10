<?php

namespace App\Http\Controllers;

use App\Models\DataPelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        if(Auth::check() && auth()->user()->role == "admin"){
            $props = [
                'title' => 'Dashboard',
                'pelanggan' => DataPelanggan::all(),
            ];
        }else{
            $props = [
                'title' => 'Dashboard'
            ];
        }
        return view('dashboard.dashboard', $props);
    }
}
