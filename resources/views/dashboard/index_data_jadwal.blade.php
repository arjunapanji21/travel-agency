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
                    Status
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
                    @if($row->aktif)
                    Aktif
                    @else
                    Non-Aktif
                    @endif
                </td>
                <td class="px-6 py-4">
                    <button type="button" data-modal-target="modal-update-{{$row->id}}"
                        data-modal-toggle="modal-update-{{$row->id}}"
                        class="font-medium text-orange-600 dark:text-orange-500 hover:underline">
                        Edit
                    </button>
                    <div id="modal-update-{{$row->id}}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <form action="{{route('update_status_jadwal', $row->id)}}" method="post">
                                @csrf
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Update Status Jadwal {{$row->kode}}
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="modal-update-{{$row->id}}">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5 space-y-4">
                                        <form class="max-w-sm mx-auto">
                                            <label for="aktif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih status</label>
                                            <select id="aktif" name="aktif" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Status jadwal:</option>
                                            <option selected value="1">Aktif</option>
                                            <option @if($row->aktif == 0) selected @endif value="0">Non-Aktif</option>
                                            </select>
                                        </form>
                                    </div>
                                    <!-- Modal footer -->
                                    <div
                                        class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button type="submit"
                                            class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">
                                            Kirim</button>
                                        <button data-modal-hide="modal-update-{{$row->id}}" type="button"
                                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-orange-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection