<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AISOFT Shell</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=playfair-display:400,700|inter:400,500,600|jetbrains-mono:400,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')

    <!-- Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="antialiased bg-[#FDFBF7] text-gray-800 font-sans">
    <div class="relative min-h-screen">
        <x-navbar />

        <div class="relative flex">
            <!-- Sidebar -->
            <aside class="fixed top-0 left-0 h-full w-64 bg-white/50 backdrop-blur-sm border-r border-black/5 pt-28 z-30">
                <div class="px-6">
                    <h3 class="font-mono text-xs uppercase text-gray-500 tracking-wider">System Core</h3>
                    <ul class="mt-4 space-y-2">
                        <li><a href="/services" class="block font-sans text-gray-700 hover:text-indigo-600">Capabilities</a></li>
                        <li><a href="/news" class="block font-sans text-gray-700 hover:text-indigo-600">System Logs</a></li>
                        <li><a href="/contact" class="block font-sans text-gray-700 hover:text-indigo-600">Uplink</a></li>
                    </ul>
                </div>
            </aside>

            <!-- Main Content -->
            <main class="ml-64 w-full p-8 pt-28">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
