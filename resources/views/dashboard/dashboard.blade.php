@extends('dashboard.layout')

@section('content')
@if(Auth::check() && auth()->user()->role == 'admin')
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="p-6 bg-white border border-orange-200 rounded-lg shadow hover:bg-orange-100 dark:bg-orange-800 dark:border-orange-700 dark:hover:bg-orange-700">
        <a href="#"
            class="">
            <div class="flex items-center justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-12 h-12" fill="orange"><path d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z"/></svg>
            <h5 class="mb-2 text-4xl text-right font-bold tracking-tight text-orange-900 dark:text-white">0</h5>
            </div>
            <p class="font-normal text-lg text-right text-orange-700 dark:text-orange-400">Jadwal Aktif</p>
        </a>
    </div>
    <div class="p-6 bg-white border border-orange-200 rounded-lg shadow hover:bg-orange-100 dark:bg-orange-800 dark:border-orange-700 dark:hover:bg-orange-700">
        <a href="#"
            class="">
            <div class="flex items-center justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-12 h-12" fill="orange"><path d="M64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-288-128 0c-17.7 0-32-14.3-32-32L224 0 64 0zM256 0l0 128 128 0L256 0zM80 64l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16L80 96c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm16 96l192 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32L96 352c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32zm0 32l0 64 192 0 0-64L96 256zM240 416l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
            <h5 class="mb-2 text-4xl text-right font-bold tracking-tight text-orange-900 dark:text-white">0</h5>
            </div>
            <p class="font-normal text-lg text-right text-orange-700 dark:text-orange-400">Pemesanan Hari Ini</p>
        </a>
    </div>
    <div class="p-6 bg-white border border-orange-200 rounded-lg shadow hover:bg-orange-100 dark:bg-orange-800 dark:border-orange-700 dark:hover:bg-orange-700">
        <a href="#"
            class="">
            <div class="flex items-center justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-12 h-12" fill="orange"><path d="M64 64C28.7 64 0 92.7 0 128l0 64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320l0 64c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-64c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6l0-64c0-35.3-28.7-64-64-64L64 64zm64 112l0 160c0 8.8 7.2 16 16 16l288 0c8.8 0 16-7.2 16-16l0-160c0-8.8-7.2-16-16-16l-288 0c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32l320 0c17.7 0 32 14.3 32 32l0 192c0 17.7-14.3 32-32 32l-320 0c-17.7 0-32-14.3-32-32l0-192z"/></svg>
            <h5 class="mb-2 text-4xl text-right font-bold tracking-tight text-orange-900 dark:text-white">0</h5>
            </div>
            <p class="font-normal text-lg text-right text-orange-700 dark:text-orange-400">Jumlah Tiket Terjual</p>
        </a>
    </div>
    <div class="p-6 bg-white border border-orange-200 rounded-lg shadow hover:bg-orange-100 dark:bg-orange-800 dark:border-orange-700 dark:hover:bg-orange-700">
        <a href="#"
            class="">
            <div class="flex items-center justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-12 h-12" fill="orange"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3zM609.3 512l-137.8 0c5.4-9.4 8.6-20.3 8.6-32l0-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2l61.4 0C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/></svg>
            <h5 class="mb-2 text-4xl text-right font-bold tracking-tight text-orange-900 dark:text-white">{{count($pelanggan)}}</h5>
            </div>
            <p class="font-normal text-lg text-right text-orange-700 dark:text-orange-400">Jumlah Pelanggan</p>
        </a>
    </div>
</div>
@else
<div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
    <div class="p-6 bg-white border border-orange-200 rounded-lg shadow hover:bg-orange-100 dark:bg-orange-800 dark:border-orange-700 dark:hover:bg-orange-700">
        <a href="#"
            class="">
            <div class="flex items-center justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-12 h-12" fill="orange"><path d="M0 128C0 92.7 28.7 64 64 64l448 0c35.3 0 64 28.7 64 64l0 64c0 8.8-7.4 15.7-15.7 18.6C541.5 217.1 528 235 528 256s13.5 38.9 32.3 45.4c8.3 2.9 15.7 9.8 15.7 18.6l0 64c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64l0-64c0-8.8 7.4-15.7 15.7-18.6C34.5 294.9 48 277 48 256s-13.5-38.9-32.3-45.4C7.4 207.7 0 200.8 0 192l0-64z"/></svg>
            <h5 class="mb-2 text-4xl text-right font-bold tracking-tight text-orange-900 dark:text-white">0</h5>
            </div>
            <p class="font-normal text-lg text-right text-orange-700 dark:text-orange-400">Tiket Dipesan</p>
        </a>
    </div>
    <div class="p-6 bg-white border border-orange-200 rounded-lg shadow hover:bg-orange-100 dark:bg-orange-800 dark:border-orange-700 dark:hover:bg-orange-700">
        <a href="#"
            class="">
            <div class="flex items-center justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-12 h-12" fill="orange"><path d="M64 64C28.7 64 0 92.7 0 128l0 64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320l0 64c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-64c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6l0-64c0-35.3-28.7-64-64-64L64 64zm64 112l0 160c0 8.8 7.2 16 16 16l288 0c8.8 0 16-7.2 16-16l0-160c0-8.8-7.2-16-16-16l-288 0c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32l320 0c17.7 0 32 14.3 32 32l0 192c0 17.7-14.3 32-32 32l-320 0c-17.7 0-32-14.3-32-32l0-192z"/></svg>
            <h5 class="mb-2 text-4xl text-right font-bold tracking-tight text-orange-900 dark:text-white">0</h5>
            </div>
            <p class="font-normal text-lg text-right text-orange-700 dark:text-orange-400">Tiket Aktif</p>
        </a>
    </div>
    <div class="p-6 bg-white border border-orange-200 rounded-lg shadow hover:bg-orange-100 dark:bg-orange-800 dark:border-orange-700 dark:hover:bg-orange-700">
        <a href="#"
            class="">
            <div class="flex items-center justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-12 h-12" fill="orange"><path d="M512 80c0 18-14.3 34.6-38.4 48c-29.1 16.1-72.5 27.5-122.3 30.9c-3.7-1.8-7.4-3.5-11.3-5C300.6 137.4 248.2 128 192 128c-8.3 0-16.4 .2-24.5 .6l-1.1-.6C142.3 114.6 128 98 128 80c0-44.2 86-80 192-80S512 35.8 512 80zM160.7 161.1c10.2-.7 20.7-1.1 31.3-1.1c62.2 0 117.4 12.3 152.5 31.4C369.3 204.9 384 221.7 384 240c0 4-.7 7.9-2.1 11.7c-4.6 13.2-17 25.3-35 35.5c0 0 0 0 0 0c-.1 .1-.3 .1-.4 .2c0 0 0 0 0 0s0 0 0 0c-.3 .2-.6 .3-.9 .5c-35 19.4-90.8 32-153.6 32c-59.6 0-112.9-11.3-148.2-29.1c-1.9-.9-3.7-1.9-5.5-2.9C14.3 274.6 0 258 0 240c0-34.8 53.4-64.5 128-75.4c10.5-1.5 21.4-2.7 32.7-3.5zM416 240c0-21.9-10.6-39.9-24.1-53.4c28.3-4.4 54.2-11.4 76.2-20.5c16.3-6.8 31.5-15.2 43.9-25.5l0 35.4c0 19.3-16.5 37.1-43.8 50.9c-14.6 7.4-32.4 13.7-52.4 18.5c.1-1.8 .2-3.5 .2-5.3zm-32 96c0 18-14.3 34.6-38.4 48c-1.8 1-3.6 1.9-5.5 2.9C304.9 404.7 251.6 416 192 416c-62.8 0-118.6-12.6-153.6-32C14.3 370.6 0 354 0 336l0-35.4c12.5 10.3 27.6 18.7 43.9 25.5C83.4 342.6 135.8 352 192 352s108.6-9.4 148.1-25.9c7.8-3.2 15.3-6.9 22.4-10.9c6.1-3.4 11.8-7.2 17.2-11.2c1.5-1.1 2.9-2.3 4.3-3.4l0 3.4 0 5.7 0 26.3zm32 0l0-32 0-25.9c19-4.2 36.5-9.5 52.1-16c16.3-6.8 31.5-15.2 43.9-25.5l0 35.4c0 10.5-5 21-14.9 30.9c-16.3 16.3-45 29.7-81.3 38.4c.1-1.7 .2-3.5 .2-5.3zM192 448c56.2 0 108.6-9.4 148.1-25.9c16.3-6.8 31.5-15.2 43.9-25.5l0 35.4c0 44.2-86 80-192 80S0 476.2 0 432l0-35.4c12.5 10.3 27.6 18.7 43.9 25.5C83.4 438.6 135.8 448 192 448z"/></svg>
            <h5 class="mb-2 text-4xl text-right font-bold tracking-tight text-orange-900 dark:text-white">0</h5>
            </div>
            <p class="font-normal text-lg text-right text-orange-700 dark:text-orange-400">Jumlah Poin</p>
        </a>
    </div>
</div>
@endif
@endsection