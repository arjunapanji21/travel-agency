@extends('dashboard.layout')

@section('content')
    
<div class="mb-4 flex justify-between items-center">
    <h2 class="text-lg font-semibold">Tabel Data Jadwal</h2>
    <a href="{{route('create_data_jadwal')}}" class="text-white bg-orange-700 hover:bg-orange-800 focus:outline-none focus:ring-4 focus:ring-orange-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Tambah Data</a>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Kode Jadwal
                </th>
                <th scope="col" class="px-6 py-3">
                    Rute
                </th>
                <th scope="col" class="px-6 py-3">
                    Waktu
                </th>
                <th scope="col" class="px-6 py-3">
                    Kendaraan
                </th>
                <th scope="col" class="px-6 py-3">
                    Sopir
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga Tiket
                </th>
                <th scope="col" class="px-6 py-3">
                    Jumlah Penumpang
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$loop->iteration}}
                </th>
                <td class="px-6 py-4">
                    {{$row->kode}}
                </td>
                <td class="px-6 py-4">
                    {{$row->rute}}
                </td>
                <td class="px-6 py-4">
                    {{date('d/m/Y H:i', strtotime($row->waktu))}}
                </td>
                <td class="px-6 py-4">
                    {{$row->kendaraan->nama." / ".$row->kendaraan->nopol}}
                </td>
                <td class="px-6 py-4">
                    {{$row->sopir->nama}}
                </td>
                <td class="px-6 py-4">
                    {{$row->harga_tiket}}
                </td>
                <td class="px-6 py-4">
                    {{$row->jumlah_penumpang." / ".$row->kendaraan->max_penumpang}}
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-orange-600 dark:text-orange-500 hover:underline">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection