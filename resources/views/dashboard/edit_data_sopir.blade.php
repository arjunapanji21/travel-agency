@extends('dashboard.layout')

@section('content')
<div>
    <h3 class="text-lg font-semibold">Edit Data Sopir</h3>
    <form action="{{route('update_data_sopir', $sopir->id)}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="nik" class="block text-sm font-medium leading-6 text-gray-900">NIK</label>
                    <div class="mt-2">
                        <input type="number" required value="{{$sopir->nik}}" name="nik" id="nik"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                    <div class="mt-2">
                        <input type="text" required value="{{$sopir->nama}}" name="nama" id="nama"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="tmp_lahir" class="block text-sm font-medium leading-6 text-gray-900">Tempat
                        Lahir</label>
                    <div class="mt-2">
                        <input id="tmp_lahir" required value="{{$sopir->tmp_lahir}}" name="tmp_lahir" type="text"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="tgl_lahir" class="block text-sm font-medium leading-6 text-gray-900">Tanggal
                        Lahir</label>
                    <div class="mt-2">
                        <input id="tgl_lahir" required value="{{$sopir->tgl_lahir}}" name="tgl_lahir" type="date"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="jk" class="block text-sm font-medium leading-6 text-gray-900">Jenis Kelamin</label>
                    <div class="mt-2">
                        <select id="jk" required name="jk"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                            <option selected disabled>Pilih jenis kelamin:</option>
                            <option selected value="Laki-laki">Laki-laki</option>
                            <option @if($sopir->jk == "Perempuan") selected @endif value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="gol_darah" class="block text-sm font-medium leading-6 text-gray-900">Golongan
                        Darah</label>
                    <div class="mt-2">
                        <select id="gol_darah" required name="gol_darah"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                            <option selected disabled>Pilih golongan darah:</option>
                            <option @if($sopir->gol_darah == "A") selected @endif value="A">A</option>
                            <option @if($sopir->gol_darah == "B") selected @endif value="B">B</option>
                            <option @if($sopir->gol_darah == "AB") selected @endif value="AB">AB</option>
                            <option @if($sopir->gol_darah == "O") selected @endif value="O">O</option>
                            <option @if($sopir->gol_darah == "-") selected @endif value="-">-</option>
                        </select>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="agama" class="block text-sm font-medium leading-6 text-gray-900">Agama</label>
                    <div class="mt-2">
                        <select id="agama" required name="agama"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                            <option selected disabled>Pilih agama:</option>
                            <option @if($sopir->agama == "Islam") selected @endif value="Islam">Islam</option>
                            <option @if($sopir->agama == "Kristen") selected @endif value="Kristen">Kristen</option>
                            <option @if($sopir->agama == "Protestan") selected @endif value="Protestan">Protestan</option>
                            <option @if($sopir->agama == "Hindu") selected @endif value="Hindu">Hindu</option>
                            <option @if($sopir->agama == "Buddha") selected @endif value="Buddha">Buddha</option>
                            <option @if($sopir->agama == "Konghucu") selected @endif value="Konghucu">Konghuchu</option>
                        </select>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="status_perkawinan" class="block text-sm font-medium leading-6 text-gray-900">Status
                        Perkawinan</label>
                    <div class="mt-2">
                        <select id="status_perkawinan" required name="status_perkawinan"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                            <option selected disabled>Pilih status perkawinan:</option>
                            <option @if($sopir->status_perkawinan == "Kawin") selected @endif value="Kawin">Kawin</option>
                            <option @if($sopir->status_perkawinan == "Belum Kawin") selected @endif value="Belum Kawin">Belum Kawin</option>
                            <option @if($sopir->status_perkawinan == "Cerai Hidup") selected @endif value="Cerai Hidup">Cerai Hidup</option>
                            <option @if($sopir->status_perkawinan == "Cerai Mati") selected @endif value="Cerai Mati">Cerai Mati</option>
                        </select>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="status_sopir" class="block text-sm font-medium leading-6 text-gray-900">Status
                        Sopir</label>
                    <div class="mt-2">
                        <select id="status_sopir" required value="{{$sopir->nik}}" name="status_sopir"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                            <option selected disabled>Pilih status sopir:</option>
                            <option selected value="Tetap">Tetap</option>
                            <option @if($sopir->status_sopir == "Tidak Tetap") selected @endif value="Tidak Tetap">Tidak Tetap</option>
                        </select>
                    </div>
                </div>

                {{-- <div class="col-span-3">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                        Foto</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" required value="{{$sopir->nik}}" name="foto" type="file" accept="image/jpeg, image/jpg">
                </div> --}}

                <div class="col-span-3">
                    <label for="alamat" class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                    <div class="mt-2">
                        <input type="text" required value="{{$sopir->alamat}}" name="alamat" id="alamat"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

            </div>
        </div>


        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{route('index_data_sopir')}}" class="text-sm font-semibold leading-6 text-gray-900">Batal</a>
            <button type="submit"
                class="rounded-md bg-orange-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Simpan</button>
        </div>
    </form>
</div>
@endsection