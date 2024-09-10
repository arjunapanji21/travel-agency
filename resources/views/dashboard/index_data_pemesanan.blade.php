@extends('dashboard.layout')

@section('content')
    
<div class="mb-4 flex justify-between items-center">
    <h2 class="text-lg font-semibold">Tabel Data Pemesanan</h2>
    {{-- <a href="" class="text-white bg-orange-700 hover:bg-orange-800 focus:outline-none focus:ring-4 focus:ring-orange-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Tambah Data</a> --}}
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Nomor Tiket
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
                    Harga Tiket
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Bukti Pembayaran
                </th>
                <th scope="col" class="px-6 py-3">
                    Update
                </th>
            </tr>
        </thead>
        <tbody>
            @if(count($data) > 0)
            @foreach($data as $row)
            <tr
                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$loop->iteration}}
                </th>
                <td class="px-6 py-4">
                    {{$row->no_tiket}}
                </td>
                <td class="px-6 py-4">
                    {{$row->jadwal->rute}}
                </td>
                <td class="px-6 py-4">
                    {{date('d/m/Y H:i', strtotime($row->jadwal->waktu))}}
                </td>
                <td class="px-6 py-4">
                    {{$row->jadwal->kendaraan->nama." / ".$row->jadwal->kendaraan->nopol}}
                </td>
                <td class="px-6 py-4">
                    Rp. {{$row->jadwal->harga_tiket}}
                </td>
                <td class="px-6 py-4">
                    <span
                        class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">{{$row->status}}</span>
                </td>
                <td class="px-6 py-4">
                    @if($row->bukti_bayar != null)
                    <a href="{{asset('uploads/bukti_bayar/'.$row->bukti_bayar)}}" target="_blank"
                        class="font-medium text-orange-600 dark:text-orange-500 border rounded-full px-4 py-2 border-orange-600 hover:bg-orange-100">Lihat</a>
                    @endif
                </td>
                <td class="px-6 py-4">
                    <button type="button" data-modal-target="modal-bayar-{{$row->id}}"
                        data-modal-toggle="modal-bayar-{{$row->id}}"
                        class="font-medium text-orange-600 dark:text-orange-500 border rounded-full px-2 py-2 border-orange-600 hover:bg-orange-100">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4" fill="currentColor"><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/></svg>
                    </button>
                    <div id="modal-bayar-{{$row->id}}" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <form action="{{route('update_status_tiket', $row->id)}}" method="post">
                                @csrf
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Update Status Tiket {{$row->no_tiket}}
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="modal-bayar-{{$row->id}}">
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
                                            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih status</label>
                                            <select id="status" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Status tiket:</option>
                                            <option value="Menunggu Pembayaran">Menunggu Pembayaran</option>
                                            <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                                            <option value="Lunas">Lunas</option>
                                            <option value="Batal">Batal</option>
                                            <option value="Expired">Expired</option>
                                            </select>
                                        </form>
                                    </div>
                                    <!-- Modal footer -->
                                    <div
                                        class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                        <button type="submit"
                                            class="text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">
                                            Kirim</button>
                                        <button data-modal-hide="modal-bayar-{{$row->id}}" type="button"
                                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-orange-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>

@endsection