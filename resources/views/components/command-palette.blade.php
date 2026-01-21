<div x-show="commandPaletteOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" @keydown.escape.window="commandPaletteOpen = false">
    <div class="flex items-start justify-center min-h-screen pt-24 px-4 text-center">
        
        <div @click.away="commandPaletteOpen = false" x-show="commandPaletteOpen" 
             x-transition:enter="ease-out duration-300" 
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
             x-transition:leave="ease-in duration-200" 
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
             class="relative bg-white/10 backdrop-blur-lg border border-white/10 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">

            <div x-data="{
                search: '',
                selectedIndex: 0,
                commands: [
                    { name: 'Home', url: '#' },
                    { name: 'Products', url: '#' },
                    { name: 'Solutions', url: '#' },
                    { name: 'Research', url: '#' },
                    { name: 'Pricing', url: '#' },
                    { name: 'Deploy Agent', url: '#' },
                ],
                get filteredCommands() {
                    if (this.search === '') {
                        return this.commands
                    }
                    return this.commands.filter(command => {
                        return command.name.toLowerCase().includes(this.search.toLowerCase())
                    })
                },
                selectNext() { this.selectedIndex = (this.selectedIndex + 1) % this.filteredCommands.length; },
                selectPrevious() { this.selectedIndex = (this.selectedIndex - 1 + this.filteredCommands.length) % this.filteredCommands.length; },
                executeCommand() { window.location.href = this.filteredCommands[this.selectedIndex].url; }
            }" x-init="$watch('search', () => { selectedIndex = 0 })">
                <input type="text" x-model="search" @keydown.arrow-down.prevent="selectNext" @keydown.arrow-up.prevent="selectPrevious" @keydown.enter.prevent="executeCommand" placeholder="Search commands..." 
                       class="w-full bg-transparent p-4 font-mono text-lg focus:outline-none border-b border-white/10">

                <ul>
                    <template x-for="(command, index) in filteredCommands" :key="index">
                        <li>
                            <a :href="command.url" class="block p-4 font-mono text-white" :class="{ 'bg-white/5': index === selectedIndex }">
                                <span x-text="command.name"></span>
                            </a>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
    </div>
</div>
