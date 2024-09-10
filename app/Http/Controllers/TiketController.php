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

    public function upload_bukti_bayar($id, Request $request){
        $tiket = Pemesanan::find($id);
        $request->validate([
            'file' => 'required'
        ]);
        $file = $request->file('file');
        $extension = $file->extension();
        $folder = public_path('uploads/bukti_bayar/');
        $filename = $tiket->no_tiket . "_bukti_bayar." . $extension;
        $file->move($folder, $filename);
        $tiket->bukti_bayar = $filename;
        $tiket->status = "Menunggu Konfirmasi";
        $tiket->save();
        return back()->with('success', 'Terima kasih, kami sedang melakukan konfirmasi pembayaran.');
    }

    public function update_status_tiket($id, Request $request){
        $tiket = Pemesanan::find($id);
        $data = $request->validate([
            'status' => 'required'
        ]);
        $tiket->status = $data['status'];
        $tiket->save();
        return back()->with('success', 'Status tiket berhasil diupdate.');
    }
}
