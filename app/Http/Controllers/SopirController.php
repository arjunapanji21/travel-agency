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
    public function edit($id){
        $props = [
            'title' => 'Sopir',
            'sopir' => DataSopir::find($id),
        ];
        return view('dashboard.edit_data_sopir', $props);
    }

    public function store(Request $request){
        $data = $request->all();
        DataSopir::create($data);
        return redirect()->route('index_data_sopir')->with('success', 'Berhasil menambah data sopir.');
    }
    public function update($id, Request $request){
        $data = $request->all();
        $sopir = DataSopir::find($id);
        $sopir->update($data);
        return redirect()->route('index_data_sopir')->with('success', 'Berhasil mengupdate data sopir.');
    }
}
