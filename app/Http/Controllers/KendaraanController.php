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
    public function create(){
        $props = [
            'title' => 'Kendaraan',
        ];
        return view('dashboard.create_data_kendaraan', $props);
    }
    public function edit($id){
        $props = [
            'title' => 'Kendaraan',
            'kendaraan' => DataKendaraan::find($id),
        ];
        return view('dashboard.edit_data_kendaraan', $props);
    }
    public function store(Request $request){
        $data = $request->all();
        DataKendaraan::create($data);
        return redirect()->route('index_data_kendaraan')->with('success', 'Berhasil menambah data kendaraan.');
    }
    public function update($id, Request $request){
        $data = $request->all();
        $kendaraan = DataKendaraan::find($id);
        $kendaraan->update($data);
        return redirect()->route('index_data_kendaraan')->with('success', 'Berhasil mengupdate data kendaraan.');
    }
}
