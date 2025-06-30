<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="manifest" href="{{ asset('manifest.webmanifest') }}">

        <!-- Обязательные -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}">

        <link rel="apple-touch-icon" href="{{ asset('icons/192x192.png') }}">


        <base href="{{ route('home') }}">

        <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="./webcam-barcode-scanner.umd.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @vite('resources/js/scanner.js')

        <script>
            window.Laravel = {
                user: @json(Auth::user())
            };
        </script>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body x-data="{ checkScanner: true, sidebarOpen: false }" class="font-sans antialiased">
        <div class="flex h-screen bg-gray-200 font-roboto">
            @livewire('sidebar')

            <div class="flex-1 flex flex-col overflow-hidden">
                <x-header />

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <div class="container mx-auto px-6 py-8">
                        <div class="flex flex-wrap items-center justify-between gap-y-4 gap-x-3 mb-5">
                            @if (isset($title))
                                <h3 class="text-gray-700 text-3xl font-medium mb-0">{{ $title }}</h3>
                            @endif
                            @if (isset($actions))
                                {{ $actions }}
                            @endif
                        </div>

                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>

        @livewire('wire-elements-modal')

        @livewireScripts
    </body>
</html>
