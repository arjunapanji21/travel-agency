@extends('dashboard.layout')

@section('content')
<div>
    <h3 class="text-lg font-semibold mb-4">Tiket yang tersedia saat ini:</h3>
<form action="{{route('store_data_tiket')}}" method="post">
        @csrf
        <div class="grid lg:grid-cols-2 gap-4">
            @foreach($data as $row)
        <div class="flex items-center mb-4">
            <input id="jadwal-{{$row->id}}" type="radio" value="{{$row->id}}" name="data_jadwal_id" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="jadwal-{{$row->id}}" class="w-full ml-3">
                <div class="rounded-lg bg-gray-100 p-4 shadow-lg">
                    <div class="flex justify-between items-center py-2 border-b">
                        <span>Kode Jadwal</span>
                        <span class="font-bold">{{$row->kode}}</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b">
                        <span>Berangkat</span>
                        <span>{{date("d M Y H:i", strtotime($row->waktu))}} WIB</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b">
                        <span>Rute</span>
                        <span>{{$row->rute}}</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b">
                        <span>Kendaraan</span>
                        <span>{{$row->kendaraan->nama." / ".$row->kendaraan->nopol}}</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b">
                        <span>Sopir</span>
                        <span>{{$row->sopir->nama}}</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b">
                        <span>Penumpang</span>
                        <span>{{$row->jumlah_penumpang." / ".$row->kendaraan->max_penumpang}}</span>
                    </div>
                    <div class="flex justify-between items-center py-2 border-b">
                        <span>Harga Tiket</span>
                        <span class="font-bold">Rp. {{$row->harga_tiket}}</span>
                    </div>
                </div>
            </label>
        </div>
        @endforeach
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{route('index_data_tiket')}}" class="text-sm font-semibold leading-6 text-gray-900">Batal</a>
            <button type="submit"
                class="rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Simpan</button>
        </div>
    </form>
</div>
@endsection