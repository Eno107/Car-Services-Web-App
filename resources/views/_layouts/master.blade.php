<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Mechaniac</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/sass/home.scss', 'resources/css/home.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image" href="\images\mechanics-logo-black 2.png">

    {{-- Libraries --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
        @include('_layouts.sidebar')

        <div class="flex-1 flex flex-col overflow-hidden">
            @include('_layouts.header')

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <div class="container mx-auto px-6 py-8">
                    @yield('body')
                </div>
            </main>
        </div>
    </div>
</body>


@if (session()->has('success'))
    <div x-data="{ show: true }" x-show="show" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform translate-y-2"
        x-init="setTimeout(() => show = false, 4000)"class="z-50 fixed bg-yellow-600 text-white py-2 px-4 rounded-xl bottom-3 left-3 texm-sm">
        <p>{{ session('success') }}</p>
    </div>
@endif

</html>
