<div x-data="publishModal()" x-show="publishModalOpen" @keydown.escape.window="publishModalOpen = false" class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm" x-cloak>
    <div @click.away="publishModalOpen = false" class="w-full max-w-2xl bg-[#0A0A0A] border border-white/10 rounded-lg shadow-2xl transform transition-all" 
         :class="{ 'scale-100 opacity-100': publishModalOpen, 'scale-95 opacity-0': !publishModalOpen }">
        <header class="flex items-center justify-between p-3 bg-white/5 border-b border-white/10">
            <div class="flex items-center space-x-2">
                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                <div class="w-3 h-3 rounded-full bg-green-500"></div>
            </div>
            <span class="font-mono text-sm text-white/60">[ user@aisoft:~/new-classified ]</span>
            <div></div>
        </header>

        <div class="p-8 overflow-hidden">
            <div class="relative">
                <div x-show="step === 1" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="absolute inset-0">
                    <h3 class="font-mono text-lg mb-4 text-green-400">Step 1: Identity</h3>
                    <div class="mb-4">
                        <label for="businessName" class="font-mono text-sm">> Business Name:</label>
                        <input type="text" id="businessName" x-model="form.name" class="w-full bg-transparent border-b border-white/20 py-1 font-mono focus:outline-none focus:border-green-400">
                    </div>
                    <div class="mb-4">
                        <label for="category" class="font-mono text-sm">> Category:</label>
                        <select id="category" x-model="form.category" class="w-full bg-transparent border-b border-white/20 py-1 font-mono focus:outline-none focus:border-green-400">
                            <option value="" disabled>Select a category</option>
                            <option value="logistics">Autonomous Supply Chain</option>
                            <option value="finance">Decentralized Finance</option>
                            <option value="health">Predictive Healthcare</option>
                        </select>
                    </div>
                    <button @click="nextStep()" class="mt-4 px-4 py-2 bg-green-600 text-white font-bold rounded hover:bg-green-700">Next</button>
                </div>

                <div x-show="step === 2" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="absolute inset-0">
                    <h3 class="font-mono text-lg mb-4 text-green-400">Step 2: Assets</h3>
                    <div class="mb-4 p-8 border-2 border-dashed border-white/20 rounded-lg text-center">
                        <p class="font-mono text-sm">Drag & drop logo and cover image here</p>
                        <p class="font-mono text-xs text-white/50 mt-1">or click to browse</p>
                    </div>
                    <button @click="nextStep()" class="mt-4 px-4 py-2 bg-green-600 text-white font-bold rounded hover:bg-green-700">Next</button>
                </div>

                <div x-show="step === 3" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="absolute inset-0">
                    <h3 class="font-mono text-lg mb-4 text-green-400">Step 3: Payment</h3>
                    <div class="mb-4 p-8 bg-black/20 rounded-lg">
                        <p class="font-mono text-center">Razorpay Payment Gateway Placeholder</p>
                    </div>
                    <button @click="submitForm()" class="mt-4 px-4 py-2 bg-green-600 text-white font-bold rounded hover:bg-green-700">Publish</button>
                </div>

                <div x-show="step === 4" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" class="absolute inset-0">
                    <p class="font-mono text-green-400">$ Deploying classified...</p>
                    <p class="font-mono text-green-400">$ Status: <span class="text-yellow-400">In Progress</span></p>
                    <pre class="mt-4 text-xs whitespace-pre-wrap font-mono text-white/70"><code>
[1/3] Uploading assets...
[2/3] Processing payment...
[3/3] Publishing to network...
                    </code></pre>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function publishModal() {
    return {
        step: 1,
        form: {
            name: '',
            category: ''
        },
        nextStep() {
            this.step++;
        },
        submitForm() {
            this.step = 4;
            // Simulate deployment
            setTimeout(() => {
                this.$dispatch('close-publish-modal');
                setTimeout(() => this.step = 1, 300); // Reset after closing
            }, 3000);
        }
    }
}
</script>
