<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-behavior: smooth;" class="h-full bg-orange-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}} | SIWATrans</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="h-full">
<div class="min-h-full">
    <nav class="bg-orange-800">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="hidden md:block items-center">
            <div class="flex">
              <div class="ml-10 flex items-baseline space-x-4">
                <a href="{{route('dashboard')}}" class="@if($title == 'Dashboard') bg-orange-900 @endif rounded-md px-3 py-2 text-sm font-medium text-white" aria-current="page">Dashboard</a>
                <a href="{{route('index_data_tiket')}}" class="@if($title == 'Tiket') bg-orange-900 @endif rounded-md px-3 py-2 text-sm font-medium text-orange-300 hover:bg-orange-700 hover:text-white">Tiket</a>
                @if(Auth::check() && auth()->user()->role == "admin")
                <a href="{{route('index_data_pemesanan')}}" class="@if($title == 'Pemesanan') bg-orange-900 @endif rounded-md px-3 py-2 text-sm font-medium text-orange-300 hover:bg-orange-700 hover:text-white">Pemesanan</a>
                <a href="{{route('index_data_jadwal')}}" class="@if($title == 'Jadwal') bg-orange-900 @endif rounded-md px-3 py-2 text-sm font-medium text-orange-300 hover:bg-orange-700 hover:text-white">Jadwal</a>
                <a href="{{route('index_data_kendaraan')}}" class="@if($title == 'Kendaraan') bg-orange-900 @endif rounded-md px-3 py-2 text-sm font-medium text-orange-300 hover:bg-orange-700 hover:text-white">Kendaraan</a>
                <a href="{{route('index_data_sopir')}}" class="@if($title == 'Sopir') bg-orange-900 @endif rounded-md px-3 py-2 text-sm font-medium text-orange-300 hover:bg-orange-700 hover:text-white">Sopir</a>
                <a href="{{route('index_data_pelanggan')}}" class="@if($title == 'Pelanggan') bg-orange-900 @endif rounded-md px-3 py-2 text-sm font-medium text-orange-300 hover:bg-orange-700 hover:text-white">Pelanggan</a>
                @endif
              </div>
            </div>
          </div>
          <div class="flex md:hidden">
            <!-- Mobile menu button -->
            <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-orange-800 p-2 text-orange-400 hover:bg-orange-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-orange-800" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!-- Menu open: "hidden", Menu closed: "block" -->
              <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!-- Menu open: "block", Menu closed: "hidden" -->
              <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>

            <div id="drawer-navigation" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-64 dark:bg-orange-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
                <h5 id="drawer-navigation-label" class="text-base font-semibold text-orange-500 uppercase dark:text-orange-400">Menu</h5>
                <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-orange-400 bg-transparent hover:bg-orange-200 hover:text-orange-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-orange-600 dark:hover:text-white" >
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Close menu</span>
               </button>
              <div class="py-4 overflow-y-auto">
                  <ul class="space-y-2 font-medium">
                     <li>
                        <a href="{{route('dashboard')}}" class="flex items-center p-2 text-orange-900 rounded-lg dark:text-white @if($title == "Dashboard") bg-orange-100 @endif hover:bg-orange-100 dark:hover:bg-orange-700 group">
                           
                           <span class="ms-3">Dashboard</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('index_data_tiket')}}" class="flex items-center p-2 text-orange-900 rounded-lg dark:text-white @if($title == "Tiket") bg-orange-100 @endif hover:bg-orange-100 dark:hover:bg-orange-700 group">
                           <span class="flex-1 ms-3 whitespace-nowrap">Tiket</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('index_data_pemesanan')}}" class="flex items-center p-2 text-orange-900 rounded-lg dark:text-white @if($title == "Pemesanan") bg-orange-100 @endif hover:bg-orange-100 dark:hover:bg-orange-700 group">
                           <span class="flex-1 ms-3 whitespace-nowrap">Pemesanan</span>
                        </a>
                     </li>
                     @if(Auth::check() && auth()->user()->role == "admin")
                     <li>
                        <a href="{{route('index_data_jadwal')}}" class="flex items-center p-2 text-orange-900 rounded-lg dark:text-white @if($title == "Jadwal") bg-orange-100 @endif hover:bg-orange-100 dark:hover:bg-orange-700 group">
                           <span class="flex-1 ms-3 whitespace-nowrap">Jadwal</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('index_data_kendaraan')}}" class="flex items-center p-2 text-orange-900 rounded-lg dark:text-white @if($title == "Kendaraan") bg-orange-100 @endif hover:bg-orange-100 dark:hover:bg-orange-700 group">
                           <span class="flex-1 ms-3 whitespace-nowrap">Kendaraan</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('index_data_sopir')}}" class="flex items-center p-2 text-orange-900 rounded-lg dark:text-white @if($title == "Sopir") bg-orange-100 @endif hover:bg-orange-100 dark:hover:bg-orange-700 group">
                           <span class="flex-1 ms-3 whitespace-nowrap">Sopir</span>
                        </a>
                     </li>
                     <li>
                        <a href="{{route('index_data_pelanggan')}}" class="flex items-center p-2 text-orange-900 rounded-lg dark:text-white hover:bg-orange-100 @if($title == "Pelanggan") bg-orange-100 @endif dark:hover:bg-orange-700 group">
                           <span class="flex-1 ms-3 whitespace-nowrap">Pelanggan</span>
                        </a>
                     </li>
                     @endif
                  </ul>
               </div>
            </div>

          </div>
          <div class="">
            <div class="flex items-center">
              <!-- Profile dropdown -->
              <div class="relative ml-3">
                <div>
                  <button type="button" class="relative flex max-w-xs items-center rounded-full bg-orange-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-orange-800" id="dropdownDefaultButton" data-dropdown-toggle="dropdown">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <div class="relative w-10 h-10 overflow-hidden bg-orange-100 rounded-full dark:bg-orange-600">
                        <svg class="absolute w-12 h-12 text-orange-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                    </div>
                  </button>

                  <div id="dropdown" class="z-10 hidden bg-white divide-y divide-orange-100 rounded-lg shadow w-44 dark:bg-orange-700">
                    <ul class="py-2 text-sm text-orange-700 dark:text-orange-200" aria-labelledby="dropdownDefaultButton">
                      @if(Auth::check() && auth()->user()->role == 'user')
                      <li class="border-b pb-2">
                        <span class="p-4 font-bold">
                            {{auth()->user()->nama}}
                        </span>
                      </li>
                      <li>
                        <a href="{{route('index_data_tiket')}}" class="flex gap-2 items-center px-4 py-2 hover:bg-orange-100 dark:hover:bg-orange-600 dark:hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4" fill="currentColor"><path d="M399 384.2C376.9 345.8 335.4 320 288 320l-64 0c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/></svg>
                            Profil Saya</a>
                      </li>
                      @endif
                      <li>
                        <a href="{{route('logout')}}" class="flex gap-2 items-center px-4 py-2 hover:bg-orange-100 dark:hover:bg-orange-600 dark:hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4" fill="currentColor"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z"/></svg>
                            Logout</a>
                      </li>
                    </ul>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      
    </nav>
  
    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold tracking-tight text-orange-900">{{$title}}</h1>
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        @yield('content')
      </div>
    </main>
  </div>
  
</body>
</html>