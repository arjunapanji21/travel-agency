<?php

namespace App\Http\Controllers;

use App\Models\DataJadwal;
use App\Models\Pemesanan;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index(){
        $props = [
            'title' => 'Tiket',
            'data' => Pemesanan::where('user_id', auth()->user()->id)->get(),
        ];
        return view('dashboard.index_data_tiket', $props);
    }

    public function create(){
        $props = [
            'title' => 'Tiket',
            'data' => DataJadwal::orderBy('waktu', 'asc')->get(),
        ];
        return view('dashboard.create_data_tiket', $props);
    }

    public function store(Request $request){
        $data = $request->validate([
            'data_jadwal_id' => 'required'
        ]);
        $dataJadwal = DataJadwal::find($data['data_jadwal_id']);
        $data['no_tiket'] = $dataJadwal->kode."-".($dataJadwal->jumlah_penumpang + 1);
        $data['user_id'] = auth()->user()->id;
        $data['status'] = 'Menunggu Pembayaran';
        
        Pemesanan::create($data);
        $dataJadwal->jumlah_penumpang += 1;
        $dataJadwal->save();
        return redirect()->route('index_data_tiket')->with('success', 'Tiket berhasil di pesan, menunggu pembayaran.');
    }
}
