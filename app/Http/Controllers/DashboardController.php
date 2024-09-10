<?php

namespace App\Http\Controllers;

use App\Models\DataJadwal;
use App\Models\DataPelanggan;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        if(Auth::check() && auth()->user()->role == "admin"){
            $pemasukkan_bulan_ini = 0;
            $pemasukkan_hari_ini = 0;
            foreach(Pemesanan::whereMonth('created_at', '=', date('m'))->where('status', 'Lunas')->get() as $row){
                $pemasukkan_bulan_ini += $row->jadwal->harga_tiket;
            }
            foreach(Pemesanan::whereMonth('created_at', '=', date('m'))->whereDate('created_at', '=', date('Y-m-d'))->where('status', 'Lunas')->get() as $row){
                $pemasukkan_hari_ini += $row->jadwal->harga_tiket;
            }
            $props = [
                'title' => 'Dashboard',
                'jadwal_aktif' => count(DataJadwal::where('waktu', '>=', date(now()))->get()),
                'tiket_bulan_ini' => count(Pemesanan::whereMonth('created_at', '=', date('m'))->get()),
                'tiket_hari_ini' => count(Pemesanan::whereMonth('created_at', '=', date('m'))->whereDate('created_at', '=', date('Y-m-d'))->get()),
                'pelanggan' => count(DataPelanggan::all()),
                'pemasukkan_bulan_ini' => $pemasukkan_bulan_ini,
                'pemasukkan_hari_ini' => $pemasukkan_hari_ini,
            ];
        }else{
            $props = [
                'title' => 'Dashboard',
                'tiket_menunggu_pembayaran' => count(Pemesanan::where('user_id', auth()->user()->id)->where('status', 'Menunggu Pembayaran')->get()),
                'tiket_aktif' => count(Pemesanan::where('user_id', auth()->user()->id)->where('status', '!=', 'Expired')->get()),
            ];
        }
        return view('dashboard.dashboard', $props);
    }
}
