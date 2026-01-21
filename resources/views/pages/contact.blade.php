<x-docs-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 min-h-[calc(100vh-12rem)]">
        <!-- Left: Map Visual -->
        <div class="bg-gray-100 rounded-lg flex items-center justify-center overflow-hidden">
            <img src="https://raw.githubusercontent.com/Chensokheng/chendesigns-dev/main/public/aisoft-map.png" alt="Greyscale Map" class="w-full h-full object-cover opacity-60">
        </div>

        <!-- Right: Uplink Terminal -->
        <div class="flex flex-col justify-center">
            <h1 class="font-serif text-4xl text-[#111111]">Establish Uplink</h1>
            <p class="mt-2 text-lg text-gray-700">Send a secure, one-way transmission to the AISOFT network. Your message will be encrypted and routed through decentralized nodes.</p>

            <div class="mt-8 space-y-4 font-mono">
                <div class="flex items-center">
                    <span class="text-gray-500 mr-2">&gt; Name:</span>
                    <input type="text" class="bg-transparent border-b border-gray-400 focus:outline-none focus:border-indigo-500 flex-grow text-[#111111]">
                </div>
                <div class="flex items-center">
                    <span class="text-gray-500 mr-2">&gt; Email:</span>
                    <input type="email" class="bg-transparent border-b border-gray-400 focus:outline-none focus:border-indigo-500 flex-grow text-[#111111]">
                </div>
                <div class="flex items-start">
                    <span class="text-gray-500 mr-2 mt-2">&gt; Message:</span>
                    <textarea rows="4" class="bg-transparent border-b border-gray-400 focus:outline-none focus:border-indigo-500 flex-grow text-[#111111] resize-none"></textarea>
                </div>
            </div>

            <div class="mt-8">
                <button class="px-6 py-3 bg-[#111111] text-white font-sans rounded-md hover:bg-black transition-colors flex items-center">
                    ESTABLISH UPLINK
                    <span class="blinking-cursor ml-2">█</span>
                </button>
            </div>
        </div>
    </div>
</x-docs-layout>

<style>
.blinking-cursor {
    color: #4ade80; /* A green accent */
    animation: blink 1s step-end infinite;
}

@keyframes blink {
    from, to { color: transparent }
    50% { color: #4ade80; }
}
</style>
