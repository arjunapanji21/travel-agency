<?php

namespace App\Http\Controllers;

use App\Models\DataPelanggan;
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
}
