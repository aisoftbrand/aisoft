@extends('layouts.app')

@section('content')
{{-- Hero Section --}}
<div class="min-h-screen flex items-center justify-center">
    {{-- Content from previous stage --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-7xl mx-auto">
        <div class="flex flex-col justify-center">
            <div x-data="{ text: 'AISOFT INTELLIGENCE', visibleText: '', cursorVisible: true }" x-init="
                let i = 0;
                const interval = setInterval(() => {
                    if (i < text.length) {
                        visibleText += text.charAt(i);
                        i++;
                    } else {
                        clearInterval(interval);
                        setTimeout(() => cursorVisible = false, 2000);
                    }
                }, 40);
                setInterval(() => { if (i < text.length) cursorVisible = !cursorVisible }, 400);
            ">
                <h1 class="text-6xl font-serif leading-tight">
                    <span x-text="visibleText"></span><span x-show="cursorVisible" class="blinking-cursor">█</span>
                </h1>
            </div>
            <div class="mt-4 font-mono text-gray-400 space-y-1">
                <p>&gt; initializing neural fabric...</p>
                <p>&gt; status: online</p>
                <p>&gt; region: andhra_prime</p>
            </div>
            <div class="mt-8 flex space-x-4">
                <button class="px-6 py-2 bg-white text-black font-bold">Initialize System</button>
                <button class="px-6 py-2 border border-gray-600 hover:bg-white/5">Read Documentation</button>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <div class="w-full bg-white/5 border border-white/10 rounded-lg p-4 font-mono text-sm">
                <div class="flex space-x-2 text-red-500 mb-2">
                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                </div>
                <div class="flex">
                    <div class="text-gray-500 mr-4">1<br>2<br>3<br>4</div>
                    <div>
                        <p>{</p>
                        <p>&nbsp;&nbsp;"module": <span class="text-purple-400">"vision"</span>,</p>
                        <p>&nbsp;&nbsp;"latency": <span class="text-blue-400">"12ms"</span>,</p>
                        <p>&nbsp;&nbsp;"confidence": <span class="text-blue-400">0.99</span></p>
                        <p>}<span class="blinking-cursor">█</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Classifieds Section --}}
<section class="py-24 px-4">
    <div x-data="classifieds()">
        <div class="relative flex justify-center mb-12">
            <input type="text" x-model="search" placeholder="Search neural modules (e.g., 'Logistics', 'Cloud')..." 
                   class="w-1/2 bg-white/5 backdrop-blur-md border border-white/10 rounded-lg py-4 px-6 font-mono text-lg focus:outline-none focus:ring-1 focus:ring-indigo-500">
        </div>

        <div class="flex justify-center space-x-2 mb-12">
            <button @click="activeFilter = 'all'" :class="{'bg-white/10': activeFilter === 'all'}" class="px-4 py-2 font-mono text-sm rounded-full border border-white/10 hover:bg-white/10 transition">All</button>
            <template x-for="tag in tags">
                <button @click="activeFilter = tag" :class="{'bg-white/10': activeFilter === tag}" class="px-4 py-2 font-mono text-sm rounded-full border border-white/10 hover:bg-white/10 transition" x-text="tag"></button>
            </template>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
            <template x-for="item in filteredItems" :key="item.id">
                <div @click="window.location.href = '/profile/' + item.id" 
                     class="bg-[#0A0A0A] border border-white/5 rounded-lg p-6 cursor-pointer transition-all duration-300 hover:border-white/40 hover:scale-[1.01]">
                    <div class="flex justify-between items-start mb-4">
                        <img :src="item.logo" alt="logo" class="w-10 h-10 rounded-md">
                        <div class="flex items-center space-x-2">
                            <span class="text-green-400 text-xs font-mono">Live</span>
                            <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                        </div>
                    </div>
                    <h3 class="font-serif text-xl mb-1" x-text="item.name"></h3>
                    <p class="font-mono text-gray-400 text-sm mb-4" x-text="item.description"></p>
                    <div class="flex flex-wrap gap-2">
                        <template x-for="tag in item.tags">
                            <span class="px-2 py-1 text-xs font-mono bg-white/5 rounded-full" x-text="tag"></span>
                        </template>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>

<script>
function classifieds() {
    return {
        search: '',
        activeFilter: 'all',
        items: [
            { id: 1, name: 'Aether Logistics', description: 'Autonomous supply chain management.', logo: 'https://placehold.co/40x40/1a1a1a/ffffff?text=A', tags: ['Logistics', 'AI', 'Cloud'] },
            { id: 2, name: 'Nova Synthetics', description: 'Generative art and media pipelines.', logo: 'https://placehold.co/40x40/1a1a1a/ffffff?text=N', tags: ['Creative', 'AI', 'GPU'] },
            { id: 3, name: 'Helios Climate', description: 'Predictive weather modeling.', logo: 'https://placehold.co/40x40/1a1a1a/ffffff?text=H', tags: ['Data', 'Science', 'Cloud'] },
            { id: 4, name: 'CyberCore Security', description: 'Decentralized threat intelligence.', logo: 'https://placehold.co/40x40/1a1a1a/ffffff?text=C', tags: ['Security', 'AI'] },
            { id: 5, name: 'Bio-Chroma Labs', description: 'Genomic data sequencing and analysis.', logo: 'https://placehold.co/40x40/1a1a1a/ffffff?text=B', tags: ['Biotech', 'Data'] },
            { id: 6, name: 'Orion Robotics', description: 'Advanced robotics process automation.', logo: 'https://placehold.co/40x40/1a1a1a/ffffff?text=O', tags: ['Logistics', 'RPA'] },
        ],
        get tags() {
            const allTags = this.items.flatMap(item => item.tags);
            return [...new Set(allTags)].sort();
        },
        get filteredItems() {
            return this.items.filter(item => {
                const searchMatch = item.name.toLowerCase().includes(this.search.toLowerCase()) || item.description.toLowerCase().includes(this.search.toLowerCase());
                const filterMatch = this.activeFilter === 'all' || item.tags.includes(this.activeFilter);
                return searchMatch && filterMatch;
            });
        }
    }
}
</script>
@endsection
