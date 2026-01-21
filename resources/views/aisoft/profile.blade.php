<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $profile['name'] }} - AISOFT</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@200;300;400;500;600;700;800;900&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="antialiased bg-[#050505] text-white">
    <div class="noise-overlay"></div>

    <a href="/" class="group fixed top-4 left-4 z-50 flex items-center justify-center w-12 h-12 rounded-full bg-black/20 backdrop-blur-md border border-white/10 transition-all duration-300 hover:w-36">
        <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
        <span class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 ml-2 font-mono text-sm">Return to Hub</span>
    </a>

    <main>
        {{-- Section A: Cover --}}
        <section class="h-[80vh] flex flex-col items-center justify-center text-center relative bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ $profile['coverImage'] }}');">
            <div class="relative flex flex-col items-center justify-center" style="text-shadow: 0px 10px 30px rgba(0, 0, 0, 0.5);">
                <img src="{{ $profile['logo'] }}" alt="{{ $profile['name'] }} Logo" class="w-32 h-32 rounded-lg mb-6 shadow-2xl">
                <h1 class="text-6xl font-serif mb-2">{{ $profile['name'] }}</h1>
                <p class="font-mono text-lg text-gray-300">{{ $profile['category'] }}</p>
            </div>
        </section>

        <div class="max-w-7xl mx-auto px-4 py-24 space-y-24">
            {{-- Section B: Data Grid --}}
            <section>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 bg-[#0A0A0A] border border-white/5 rounded-lg p-8 flex items-center justify-center">
                        <p class="text-3xl font-serif leading-relaxed text-center">"{{ $profile['mission'] }}"</p>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-[#0A0A0A] border border-white/5 rounded-lg p-8 text-center">
                            <p class="text-6xl font-mono">{{ $profile['stats']['yearsActive'] }}</p>
                            <p class="font-mono text-gray-400">Years Active</p>
                        </div>
                        <div class="bg-[#0A0A0A] border border-white/5 rounded-lg p-8 text-center">
                            <p class="text-6xl font-mono">{{ $profile['stats']['projectsCompleted'] }}</p>
                            <p class="font-mono text-gray-400">Projects Completed</p>
                        </div>
                    </div>
                    <div class="lg:col-span-3 bg-[#0A0A0A] border border-white/5 rounded-lg p-8 h-64 flex items-center justify-center">
                        <div class="w-full h-full bg-center bg-no-repeat" style="background-image: url('https://i.imgur.com/8Vp9l2H.png'); filter: invert(1) grayscale(1); opacity: 0.5;"></div>
                    </div>
                </div>
            </section>

            {{-- Section C: Service Modules --}}
            <section>
                <h2 class="text-4xl font-serif mb-8 text-center">System Capabilities</h2>
                <div class="space-y-4">
                    @foreach($profile['services'] as $service)
                        <div class="bg-[#0A0A0A] border border-white/5 rounded-lg p-4 font-mono">
                            &gt; Executing: {{ $service }}...
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </main>

</body>
</html>
