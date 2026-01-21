<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AISOFT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/aisoft.css') }}">
</head>
<body class="antialiased">
    <div class="noise-overlay"></div>
    <div class="grid-overlay"></div>
    @include('aisoft.layouts.header')

    <main>
        @yield('content')
    </main>

    @include('aisoft.layouts.footer')

    <div id="command-palette" class="command-palette-container hidden">
        <div class="command-palette-overlay"></div>
        <div class="command-palette">
            <input type="text" id="command-input" placeholder="Enter a command...">
            <ul id="command-list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Classifieds</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>

    @stack('scripts')

    <script>
        const commandPalette = document.getElementById('command-palette');
        const commandButton = document.querySelector('.command-palette button');
        const commandInput = document.getElementById('command-input');
        const commandList = document.getElementById('command-list');

        commandButton.addEventListener('click', () => {
            commandPalette.classList.toggle('hidden');
            commandInput.focus();
        });

        document.addEventListener('keydown', (e) => {
            if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
                e.preventDefault();
                commandPalette.classList.toggle('hidden');
                commandInput.focus();
            }
            if (e.key === 'Escape' && !commandPalette.classList.contains('hidden')) {
                commandPalette.classList.add('hidden');
            }
        });

        commandInput.addEventListener('keyup', () => {
            const filter = commandInput.value.toUpperCase();
            const li = commandList.getElementsByTagName('li');

            for (let i = 0; i < li.length; i++) {
                const a = li[i].getElementsByTagName('a')[0];
                const txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        });

    </script>
</body>
</html>