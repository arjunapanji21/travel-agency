<?php

namespace App\Http\Controllers;

use App\Models\DataSopir;
use Illuminate\Http\Request;

class SopirController extends Controller
{
    public function index(){
        $props = [
            'title' => 'Sopir',
            'data' => DataSopir::orderBy('nama', 'asc')->get(),
        ];
        return view('dashboard.index_data_sopir', $props);
    }
    public function create(){
        $props = [
            'title' => 'Sopir'
        ];
        return view('dashboard.create_data_sopir', $props);
    }
}
