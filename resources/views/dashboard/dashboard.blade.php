@extends('dashboard.layout')

@section('content')
@if(Auth::check() && auth()->user()->role == 'admin')
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="p-6 bg-white border border-orange-200 rounded-lg shadow hover:bg-orange-100 dark:bg-orange-800 dark:border-orange-700 dark:hover:bg-orange-700">
        <div
            class="">
            <div class="flex items-center justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-12 h-12" fill="orange"><path d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z"/></svg>
            <h5 class="mb-2 text-4xl text-right font-bold tracking-tight text-orange-900 dark:text-white">{{$jadwal_aktif}}</h5>
            </div>
            <p class="font-normal text-lg text-right text-orange-700 dark:text-orange-400">Jadwal Aktif</p>
        </div>
    </div>
    <div class="p-6 bg-white border border-orange-200 rounded-lg shadow hover:bg-orange-100 dark:bg-orange-800 dark:border-orange-700 dark:hover:bg-orange-700">
        <div
            class="">
            <div class="flex items-center justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-12 h-12" fill="orange"><path d="M64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-288-128 0c-17.7 0-32-14.3-32-32L224 0 64 0zM256 0l0 128 128 0L256 0zM80 64l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16L80 96c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm16 96l192 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32L96 352c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32zm0 32l0 64 192 0 0-64L96 256zM240 416l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
            <h5 class="mb-2 text-4xl text-right font-bold tracking-tight text-orange-900 dark:text-white">{{$tiket_hari_ini}}</h5>
            </div>
            <p class="font-normal text-lg text-right text-orange-700 dark:text-orange-400">Tiket Terjual Hari Ini</p>
        </div>
    </div>
    <div class="p-6 bg-white border border-orange-200 rounded-lg shadow hover:bg-orange-100 dark:bg-orange-800 dark:border-orange-700 dark:hover:bg-orange-700">
        <div
            class="">
            <div class="flex items-center justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-12 h-12" fill="orange"><path d="M64 64C28.7 64 0 92.7 0 128l0 64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320l0 64c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-64c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6l0-64c0-35.3-28.7-64-64-64L64 64zm64 112l0 160c0 8.8 7.2 16 16 16l288 0c8.8 0 16-7.2 16-16l0-160c0-8.8-7.2-16-16-16l-288 0c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32l320 0c17.7 0 32 14.3 32 32l0 192c0 17.7-14.3 32-32 32l-320 0c-17.7 0-32-14.3-32-32l0-192z"/></svg>
            <h5 class="mb-2 text-4xl text-right font-bold tracking-tight text-orange-900 dark:text-white">{{$tiket_bulan_ini}}</h5>
            </div>
            <p class="font-normal text-lg text-right text-orange-700 dark:text-orange-400">Tiket Terjual Bulan Ini</p>
        </div>
    </div>
    <div class="p-6 bg-white border border-orange-200 rounded-lg shadow hover:bg-orange-100 dark:bg-orange-800 dark:border-orange-700 dark:hover:bg-orange-700">
        <div
            class="">
            <div class="flex items-center justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-12 h-12" fill="orange"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3zM609.3 512l-137.8 0c5.4-9.4 8.6-20.3 8.6-32l0-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2l61.4 0C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/></svg>
            <h5 class="mb-2 text-4xl text-right font-bold tracking-tight text-orange-900 dark:text-white">{{$pelanggan}}</h5>
            </div>
            <p class="font-normal text-lg text-right text-orange-700 dark:text-orange-400">Jumlah Pelanggan</p>
        </div>
    </div>
    <div class="col-span-2 p-6 bg-white border border-orange-200 rounded-lg shadow hover:bg-orange-100 dark:bg-orange-800 dark:border-orange-700 dark:hover:bg-orange-700">
        <div
            class="">
            <div class="flex items-center justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-12 h-12" fill="orange"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3zM609.3 512l-137.8 0c5.4-9.4 8.6-20.3 8.6-32l0-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2l61.4 0C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/></svg>
            <h5 class="mb-2 text-4xl text-right font-bold tracking-tight text-orange-900 dark:text-white">Rp. {{$pemasukkan_hari_ini}}</h5>
            </div>
            <p class="font-normal text-lg text-right text-orange-700 dark:text-orange-400">Penghasilan Hari Ini</p>
        </div>
    </div>
    <div class="col-span-2 p-6 bg-white border border-orange-200 rounded-lg shadow hover:bg-orange-100 dark:bg-orange-800 dark:border-orange-700 dark:hover:bg-orange-700">
        <div
            class="">
            <div class="flex items-center justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-12 h-12" fill="orange"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3zM609.3 512l-137.8 0c5.4-9.4 8.6-20.3 8.6-32l0-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2l61.4 0C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/></svg>
            <h5 class="mb-2 text-4xl text-right font-bold tracking-tight text-orange-900 dark:text-white">Rp. {{$pemasukkan_bulan_ini}}</h5>
            </div>
            <p class="font-normal text-lg text-right text-orange-700 dark:text-orange-400">Total Penghasilan Bulan Ini</p>
        </div>
    </div>
</div>
@else
<div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
    <div class="p-6 bg-white border border-orange-200 rounded-lg shadow hover:bg-orange-100 dark:bg-orange-800 dark:border-orange-700 dark:hover:bg-orange-700">
        <div
            class="">
            <div class="flex items-center justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-12 h-12" fill="orange"><path d="M0 128C0 92.7 28.7 64 64 64l448 0c35.3 0 64 28.7 64 64l0 64c0 8.8-7.4 15.7-15.7 18.6C541.5 217.1 528 235 528 256s13.5 38.9 32.3 45.4c8.3 2.9 15.7 9.8 15.7 18.6l0 64c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64l0-64c0-8.8 7.4-15.7 15.7-18.6C34.5 294.9 48 277 48 256s-13.5-38.9-32.3-45.4C7.4 207.7 0 200.8 0 192l0-64z"/></svg>
            <h5 class="mb-2 text-4xl text-right font-bold tracking-tight text-orange-900 dark:text-white">{{$tiket_menunggu_pembayaran}}</h5>
            </div>
            <p class="font-normal text-lg text-right text-orange-700 dark:text-orange-400">Menunggu Pembayaran</p>
        </div>
    </div>
    <div class="p-6 bg-white border border-orange-200 rounded-lg shadow hover:bg-orange-100 dark:bg-orange-800 dark:border-orange-700 dark:hover:bg-orange-700">
        <div
            class="">
            <div class="flex items-center justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-12 h-12" fill="orange"><path d="M64 64C28.7 64 0 92.7 0 128l0 64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320l0 64c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-64c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6l0-64c0-35.3-28.7-64-64-64L64 64zm64 112l0 160c0 8.8 7.2 16 16 16l288 0c8.8 0 16-7.2 16-16l0-160c0-8.8-7.2-16-16-16l-288 0c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32l320 0c17.7 0 32 14.3 32 32l0 192c0 17.7-14.3 32-32 32l-320 0c-17.7 0-32-14.3-32-32l0-192z"/></svg>
            <h5 class="mb-2 text-4xl text-right font-bold tracking-tight text-orange-900 dark:text-white">{{$tiket_aktif}}</h5>
            </div>
            <p class="font-normal text-lg text-right text-orange-700 dark:text-orange-400">Tiket Aktif</p>
        </div>
    </div>
</div>
@endif
@endsection