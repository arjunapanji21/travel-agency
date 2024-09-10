<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index(){
        $props = [
            'title' => 'Pemesanan',
            'data' => Pemesanan::orderBy('created_at', 'desc')->get(),
        ];
        return view('dashboard.index_data_pemesanan', $props);
    }
}
