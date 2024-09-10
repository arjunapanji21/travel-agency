@extends('dashboard.layout')

@section('content')
<div>
    <h3 class="text-lg font-semibold">Tambah Data Jadwal</h3>
<form action="{{route('store_data_jadwal')}}" method="post">
        @csrf
        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="titik_awal" class="block text-sm font-medium leading-6 text-gray-900">Berangkat Dari</label>
                    <div class="mt-2">
                        <select id="titik_awal" required name="titik_awal"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                            <option selected disabled>Pilih titik awal keberangkatan:</option>
                            <option value="Nipah">Nipah</option>
                            <option value="Lambur">Lambur</option>
                            <option value="Sabak">Sabak</option>
                            <option value="Jambi">Jambi</option>
                        </select>
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="tujuan" class="block text-sm font-medium leading-6 text-gray-900">Tujuan</label>
                    <div class="mt-2">
                        <select id="tujuan" required name="tujuan"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                            <option selected disabled>Pilih tujuan:</option>
                            <option value="Nipah">Nipah</option>
                            <option value="Lambur">Lambur</option>
                            <option value="Sabak">Sabak</option>
                            <option value="Jambi">Jambi</option>
                        </select>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="data_kendaraan_id" class="block text-sm font-medium leading-6 text-gray-900">Kendaraan</label>
                    <div class="mt-2">
                        <select id="data_kendaraan_id" required name="data_kendaraan_id"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                            <option selected disabled>Pilih kendaraan:</option>
                            @foreach($kendaraan as $row)
                            <option value="{{$row->id}}">{{$row->nama}} / {{$row->nopol}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="data_sopir_id" class="block text-sm font-medium leading-6 text-gray-900">Sopir</label>
                    <div class="mt-2">
                        <select id="data_sopir_id" required name="data_sopir_id"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                            <option selected disabled>Pilih sopir:</option>
                            @foreach($sopir as $row)
                            <option value="{{$row->id}}">{{$row->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="waktu" class="block text-sm font-medium leading-6 text-gray-900">Waktu</label>
                    <div class="mt-2">
                        <input id="waktu" required name="waktu" type="datetime-local"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="harga_tiket" class="block text-sm font-medium leading-6 text-gray-900">Harga Tiket</label>
                    <div class="mt-2">
                        <input type="number" required name="harga_tiket" id="harga_tiket"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </div>
        </div>


        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{route('index_data_jadwal')}}" class="text-sm font-semibold leading-6 text-gray-900">Batal</a>
            <button type="submit"
                class="rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Simpan</button>
        </div>
    </form>
</div>
@endsection