@extends('layouts.app')

@section('content')
    <section class="relative z-10 flex flex-col items-center justify-center min-h-screen px-4 text-center pt-20">
        
        <div class="mb-8 inline-flex items-center gap-2 bg-white/5 border border-white/10 rounded-full px-3 py-1 pr-4 backdrop-blur-sm">
            <span class="bg-gradient-to-r from-purple-500 to-blue-500 text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wide">New</span>
            <span class="text-sm text-gray-300">Automated Lead Generation</span>
        </div>

        <h1 class="metallic-text text-5xl md:text-7xl font-bold tracking-tight max-w-5xl leading-[1.1] mb-6">
            Intelligent Automation<br> 
            for Modern Businesses.
        </h1>

        <p class="text-lg md:text-xl text-gray-400 max-w-2xl mb-10 leading-relaxed">
            AISOFT brings AI automation to your fingertips to streamline tasks, reduce errors, and scale your operations effortlessly.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 w-full justify-center">
            <a href="#" class="group relative px-8 py-3.5 bg-purple-600 rounded-lg text-white font-semibold transition hover:scale-105 hover:shadow-[0_0_30px_rgba(147,51,234,0.6)]">
                Get Started
            </a>
            <a href="#" class="px-8 py-3.5 bg-white/5 border border-white/10 hover:bg-white/10 rounded-lg text-white font-semibold transition hover:scale-105 backdrop-blur-sm">
                View Services
            </a>
        </div>

    </section>

    <x-our-services />
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/our-services.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/our-services.js') }}"></script>
@endpush
