@extends('dashboard.layout')

@section('content')
    
<div class="mb-4 flex justify-between items-center">
    <h2 class="text-lg font-semibold">Tabel Data Kendaraan</h2>
    <a href="" class="text-white bg-orange-700 hover:bg-orange-800 focus:outline-none focus:ring-4 focus:ring-orange-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Tambah Data</a>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Jenis
                </th>
                <th scope="col" class="px-6 py-3">
                    No. Polisi
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
                    {{$row->nama}}
                </td>
                <td class="px-6 py-4">
                    {{$row->jenis}}
                </td>
                <td class="px-6 py-4">
                    {{$row->nopol}}
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