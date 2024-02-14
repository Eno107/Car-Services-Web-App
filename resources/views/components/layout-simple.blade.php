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


<body class="antialiased">


    {{ $slot }}

</body>

<script>
    const phoneMenuBars = document.getElementById('phone-menu-button');
    const phoneMenuIcon = document.getElementById('phone-menu-icon');
    const phoneCloseIcon = document.getElementById('phone-close-icon');
    const phoneMenu = document.getElementById('mobile-menu');

    phoneMenuBars.addEventListener('click', () => {
        phoneMenuIcon.classList.toggle('hidden');
        phoneCloseIcon.classList.toggle('hidden');
        phoneMenu.classList.toggle('hidden');
    })
</script>

</html>
