<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Üzemanyag nyilvántartó') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-800">
  <header class="bg-white h-16 flex justify-center items-center">
    <div class="md:hidden w-12" id="nav-btn">
      <img src="{{ asset('hamburger-menu.svg') }}" alt="Hamburger menü">
    </div>
    <nav class="hidden md:block">
      <ul class="flex gap-7 font-medium">
        <a href="{{ route('public.main') }}" class="hover:text-gray-500 transition ease-in-out duration-150"><li>Főoldal</li></a>
        <a href="{{ route('car.data') }}" class="hover:text-gray-500 transition ease-in-out duration-150"><li>Kocsi adatai</li></a>
        <a href="{{ route('fuel.list') }}" class="hover:text-gray-500 transition ease-in-out duration-150"><li>Üzemanyag nyilvántartó</li></a>
        <a href="#" class="hover:text-gray-500 transition ease-in-out duration-150"><li>Szerviznapló</li></a>
        <a href="#" class="hover:text-gray-500 transition ease-in-out duration-150"><li>Biztosítási adatok</li></a>
        <form action="{{ route('logout') }}" method="post" class="hover:text-gray-500 transition ease-in-out duration-150">
          @csrf
          <button type="submit">Kijelentkezés</button>
        </form>
      </ul>
    </nav>
  </header>

  <nav class="bg-white flex md:hidden items-center px-2 max-h-0 overflow-hidden" id="mobile-nav">
    <ul class="flex flex-col gap-2 font-medium w-full">
      <a href="{{ route('public.main') }}" class="hover:text-gray-500 transition ease-in-out duration-150 menu-btn"><li>Főoldal</li></a>
      <a href="{{ route('car.data') }}" class="hover:text-gray-500 transition ease-in-out duration-150 menu-btn"><li>Kocsi adatai</li></a>
      <a href="{{ route('fuel.list') }}" class="hover:text-gray-500 transition ease-in-out duration-150 menu-btn"><li>Üzemanyag nyilvántartó</li></a>
      <a href="#" class="hover:text-gray-500 transition ease-in-out duration-150 menu-btn"><li>Szerviznapló</li></a>
      <a href="#" class="hover:text-gray-500 transition ease-in-out duration-150 menu-btn"><li>Biztosítási adatok</li></a>
      <form action="{{ route('logout') }}" method="post" class="hover:text-gray-500 transition ease-in-out duration-150 menu-btn">
          @csrf
          <button type="submit">Kijelentkezés</button>
        </form>
    </ul>
  </nav>

  <main>
      @yield('content')
  </main>
</body>
</html>
