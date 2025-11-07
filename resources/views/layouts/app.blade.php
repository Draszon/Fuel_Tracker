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
    <div class="sm:hidden w-12" id="nav-btn">
      <img src="{{ asset('hamburger-menu.svg') }}" alt="Hamburger menü">
    </div>
    <nav class="hidden sm:block">
      <ul class="flex gap-7 font-medium">
        <a href="#" class="hover:text-gray-500 transition ease-in-out duration-150"><li>Főoldal</li></a>
        <a href="#" class="hover:text-gray-500 transition ease-in-out duration-150"><li>Üzemanyag nyilvántartó</li></a>
        <a href="#" class="hover:text-gray-500 transition ease-in-out duration-150"><li>Statisztikák</li></a>
      </ul>
    </nav>
  </header>

  <nav class="bg-white flex sm:hidden items-center px-2 h-0 overflow-hidden">
    <ul class="flex flex-col gap-2 font-medium w-full">
      <a href="#" class="hover:text-gray-500 transition ease-in-out duration-150 menu-btn"><li>Főoldal</li></a>
      <a href="#" class="hover:text-gray-500 transition ease-in-out duration-150 menu-btn"><li>Üzemanyag nyilvántartó</li></a>
      <a href="#" class="hover:text-gray-500 transition ease-in-out duration-150 menu-btn"><li>Statisztikák</li></a>
    </ul>
  </nav>

  <main>
      @yield('content')
  </main>
</body>
</html>
