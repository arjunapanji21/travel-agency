@extends('dashboard.layout')

@section('content')
<div>
    <h3 class="text-lg font-semibold">Tambah Data Kendaraan</h3>
    <form action="{{route('store_data_kendaraan')}}" method="post">
        @csrf
        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                    <div class="mt-2">
                        <input type="text" required name="nama" id="nama"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="jenis" class="block text-sm font-medium leading-6 text-gray-900">Jenis</label>
                    <div class="mt-2">
                        <input type="text" required name="jenis" id="jenis"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="nopol" class="block text-sm font-medium leading-6 text-gray-900">No. Polisi</label>
                    <div class="mt-2">
                        <input id="nopol" required name="nopol" type="text"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="max_penumpang" class="block text-sm font-medium leading-6 text-gray-900">Max. Penumpang</label>
                    <div class="mt-2">
                        <input id="max_penumpang" required name="max_penumpang" type="number"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

            </div>
        </div>


        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{route('index_data_kendaraan')}}" class="text-sm font-semibold leading-6 text-gray-900">Batal</a>
            <button type="submit"
                class="rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Simpan</button>
        </div>
    </form>
</div>
@endsection