<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AISOFT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Scripts -->
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="antialiased">
    <div class="grain-overlay"></div>
    <div class="iridescent-flares">
        <div class="flare-orange"></div>
        <div class="flare-indigo"></div>
        <div class="flare-teal"></div>
    </div>

    <div x-data="{ commandPaletteOpen: false, publishModalOpen: false }" 
         @keydown.window.prevent.cmd.k="commandPaletteOpen = true"
         @keydown.window.prevent.ctrl.k="commandPaletteOpen = true"
         @open-command-palette.window="commandPaletteOpen = true"
         @open-publish-modal.window="publishModalOpen = true"
         @close-publish-modal.window="publishModalOpen = false">

        <x-navbar />

        @include('layouts.command-palette')

        <div x-show="publishModalOpen">
            @include('layouts.publish-modal')
        </div>

        <main>
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>

</body>
</html>
