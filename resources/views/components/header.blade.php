<header x-show="showNavbar" x-transition:enter="transition ease-out duration-500 transform" x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0" class="fixed top-0 left-0 right-0 z-50">
    <nav class="flex items-center justify-between p-4 mx-auto max-w-7xl bg-white/5 backdrop-blur-md border border-white/10 rounded-full mt-4">
        <div class="flex items-center space-x-8">
            <a href="/" class="text-2xl font-serif">AISOFT</a>
            <div class="hidden md:flex items-center space-x-8">
                <a href="#" class="glitch-text" data-text="Products">Products</a>
                <a href="#" class="glitch-text" data-text="Solutions">Solutions</a>
                <a href="#" class="glitch-text" data-text="Research">Research</a>
                <a href="#" class="glitch-text" data-text="Pricing">Pricing</a>
            </div>
        </div>
        <div class="flex items-center space-x-4">
            <button @click="$dispatch('open-publish-modal')" class="px-4 py-2 text-white bg-indigo-600 rounded-full hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Create Digital Classified
            </button>
            <button @click="commandPaletteOpen = true" class="p-2 rounded-full hover:bg-white/10">
                <span class="font-mono text-lg">⌘K</span>
            </button>
        </div>
    </nav>
</header>
