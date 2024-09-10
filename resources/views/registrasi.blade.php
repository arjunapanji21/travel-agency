<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi | SIWATrans</title>
    @vite('resources/css/app.css')
</head>
<body class="h-full">
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-left text-2xl font-bold leading-9 tracking-tight text-gray-900">SIWATrans | Registrasi</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{route('create_new_user')}}" method="POST">
        @csrf
        <div>
          <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
          <div class="mt-2">
            <input id="nama" name="nama" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <label for="alamat" class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
          <div class="mt-2">
            <input id="alamat" name="alamat" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <label for="no_telp" class="block text-sm font-medium leading-6 text-gray-900">No. HP</label>
          <div class="mt-2">
            <input id="no_telp" name="no_telp" type="number" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            {{-- <div class="text-sm">
              <a href="#" class="font-semibold text-orange-600 hover:text-orange-500">Forgot password?</a>
            </div> --}}
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Ulangi Password</label>
            {{-- <div class="text-sm">
              <a href="#" class="font-semibold text-orange-600 hover:text-orange-500">Forgot password?</a>
            </div> --}}
          </div>
          <div class="mt-2">
            <input id="password" name="password_confirmation" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-orange-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Daftar</button>
        </div>
      </form>
  
      <p class="mt-10 text-center text-sm text-gray-500">
        Sudah punya akun?
        <a href="{{route('login')}}" class="font-semibold leading-6 text-orange-600 hover:text-orange-500">Login</a>
      </p>
      <p class="mt-10 text-center text-sm text-gray-500">
        Kembali ke 
        <a href="{{route('welcome')}}" class="font-semibold leading-6 text-orange-600 hover:text-orange-500">Halawan Awal</a>
      </p>
    </div>
  </div>
  
</body>
</html>