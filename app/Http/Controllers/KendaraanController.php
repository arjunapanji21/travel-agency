<?php

namespace App\Http\Controllers;

use App\Models\DataKendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index(){
        $props = [
            'title' => 'Kendaraan',
            'data' => DataKendaraan::orderBy('created_at', 'desc')->get(),
        ];
        return view('dashboard.index_data_kendaraan', $props);
    }
}
