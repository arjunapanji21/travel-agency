@extends('dashboard.layout')

@section('content')
<div>
    <h3 class="text-lg font-semibold">Pesan Tiket Baru</h3>
<form action="{{route('store_data_tiket')}}" method="post">
        @csrf
        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="data_jadwal_id" class="block text-sm font-medium leading-6 text-gray-900">Pilih Jadwal</label>
                    <div class="mt-2">
                        <select id="data_jadwal_id" required name="data_jadwal_id"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                            <option selected disabled>Pilih jadwal:</option>
                            @foreach($data as $row)
                            <option value="{{$row->id}}">{{date('d/m/Y H:i', strtotime($row->waktu))." | ".$row->rute." | Harga: Rp. ".$row->harga_tiket}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{route('index_data_tiket')}}" class="text-sm font-semibold leading-6 text-gray-900">Batal</a>
            <button type="submit"
                class="rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Simpan</button>
        </div>
    </form>
</div>
@endsection