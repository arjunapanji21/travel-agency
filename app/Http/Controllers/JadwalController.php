<?php

namespace App\Http\Controllers;

use App\Models\DataJadwal;
use App\Models\DataKendaraan;
use App\Models\DataSopir;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(){
        $props = [
            'title' => 'Jadwal',
            'data' => DataJadwal::orderBy('created_at', 'desc')->get(),
        ];
        return view('dashboard.index_data_jadwal', $props);
    }

    public function create(){
        $props = [
            'title' => 'Jadwal',
            'kendaraan' => DataKendaraan::orderBy('nama', 'asc')->get(),
            'sopir' => DataSopir::orderBy('nama', 'asc')->get()
        ];
        return view('dashboard.create_data_jadwal', $props);
    }

    public function store(Request $request){
        $data = $request->validate([
            'titik_awal' => 'required',
            'tujuan' => 'required',
            'waktu' => 'required',
            'data_kendaraan_id' => 'required',
            'data_sopir_id' => 'required',
            'harga_tiket' => 'required',
        ]);
        $data['rute'] = $data['titik_awal'] . "-" . $data['tujuan'];
        $data['jumlah_penumpang'] = 0;
        $data['kode'] = "J".rand(00000,99999);
        DataJadwal::create($data);
        return redirect()->route('index_data_jadwal')->with('success', 'Data jadwal berhasil ditambahkan.');
    }
    public function update($id, Request $request){
        $data = $request->validate([
            'aktif' => 'required',
        ]);
        $jadwal = DataJadwal::find($id);
        $jadwal->aktif = $data['aktif'];
        $jadwal->save();
        return redirect()->back()->with('success', 'Data jadwal berhasil ditambahkan.');
    }
}
