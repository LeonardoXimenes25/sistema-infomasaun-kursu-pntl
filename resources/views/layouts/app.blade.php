<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'SISTEMA') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    <!-- Filament Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    @stack('styles')
</head>
<body class="antialiased bg-gray-100 text-gray-800">

    {{-- Navbar atau Header jika perlu --}}
    @include('layouts.navigation')

    {{-- Konten --}}
    <main class="p-4">
        @yield('content')
    </main>

    {{-- Scripts --}}
    @livewireScripts
    @stack('scripts') {{-- Wajib agar @push('scripts') di view bisa tampil --}}
</body>
</html>
