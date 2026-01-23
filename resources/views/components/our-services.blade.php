<main class="relative min-h-screen overflow-hidden bg-gradient-to-b from-background-dark via-deep-indigo to-background-dark">
<!-- Background Wireframe Mesh -->
<div class="absolute inset-0 wireframe-bg opacity-30 pointer-events-none"></div>
<div class="absolute top-1/4 -left-20 w-96 h-96 bg-primary/20 rounded-full blur-[120px]"></div>
<div class="absolute bottom-1/4 -right-20 w-96 h-96 bg-primary/10 rounded-full blur-[120px]"></div>
<div class="relative z-10 max-w-7xl mx-auto px-6 py-20 flex flex-col items-center">
<!-- Headline Section -->
<div class="flex flex-col items-center mb-12">
<div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-primary/20 border border-primary/30 px-4 mb-6">
<span class="material-symbols-outlined text-[16px] text-primary">auto_awesome</span>
<p class="text-primary text-xs font-bold uppercase tracking-widest">Our Services</p>
</div>
<h1 class="text-white tracking-tight text-5xl md:text-6xl font-bold leading-tight text-center pb-4">
                    The Next Generation of <span class="text-primary">AI Services</span>
</h1>
<p class="text-white/50 text-lg font-normal leading-relaxed max-w-2xl text-center">
                    Empowering your business with cutting-edge AI integration and bespoke digital solutions designed for the future.
                </p>
</div>
<!-- Filter Chips -->
<div class="flex flex-wrap justify-center gap-3 p-1 mb-20 bg-white/5 border border-white/10 rounded-2xl backdrop-blur-sm">
    <button class="filter-chip flex h-10 items-center justify-center gap-x-2 rounded-xl bg-primary px-6 text-white text-sm font-bold shadow-lg transition-all" data-service="ai-solutions">AI Solutions</button>
    <button class="filter-chip flex h-10 items-center justify-center gap-x-2 rounded-xl bg-transparent px-6 text-white/60 hover:text-white text-sm font-medium transition-all" data-service="web-dev">Web Development</button>
    <button class="filter-chip flex h-10 items-center justify-center gap-x-2 rounded-xl bg-transparent px-6 text-white/60 hover:text-white text-sm font-medium transition-all" data-service="app-dev">App Design</button>
    <button class="filter-chip flex h-10 items-center justify-center gap-x-2 rounded-xl bg-transparent px-6 text-white/60 hover:text-white text-sm font-medium transition-all" data-service="ml-models">ML Model Development</button>
    <button class="filter-chip flex h-10 items-center justify-center gap-x-2 rounded-xl bg-transparent px-6 text-white/60 hover:text-white text-sm font-medium transition-all" data-service="drip-marketing">Drip Marketing</button>
</div>
<!-- Main Interactive Section -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center w-full">
<!-- Left Column: Circular Selector -->
<div class="flex justify-center items-center relative h-[500px]">
<div class="absolute inset-0 border-[1px] border-dashed border-white/10 rounded-full scale-75 lg:scale-100"></div>
<div class="absolute inset-0 border-[1px] border-solid border-white/5 rounded-full scale-50"></div>
<!-- Center Point -->
<div class="relative z-20 w-24 h-24 glass-card rounded-full flex items-center justify-center neon-glow border-primary/40">
<span class="material-symbols-outlined text-4xl text-primary">psychology</span>
</div>
<!-- Orbital Items -->
<!-- Top (Selected) -->
<div class="service-orbit active absolute top-0 flex flex-col items-center group cursor-pointer" data-service="ai-solutions">
<div class="w-16 h-16 glass-card rounded-xl flex items-center justify-center border-primary/60 scale-110">
<span class="material-symbols-outlined text-3xl text-primary">smart_toy</span>
</div>
<span class="mt-3 text-xs font-bold text-white uppercase tracking-tighter">AI Solutions</span>
</div>
<!-- Top Right -->
<div class="service-orbit absolute top-1/4 right-0 flex flex-col items-center opacity-60 hover:opacity-100 transition-opacity cursor-pointer" data-service="web-dev">
<div class="w-14 h-14 glass-card rounded-xl flex items-center justify-center">
<span class="material-symbols-outlined text-2xl">code</span>
</div>
<span class="mt-2 text-[10px] font-medium text-white/50 uppercase">Web Dev</span>
</div>
<!-- Bottom Right -->
<div class="service-orbit absolute bottom-1/4 right-0 flex flex-col items-center opacity-60 hover:opacity-100 transition-opacity cursor-pointer" data-service="app-dev">
<div class="w-14 h-14 glass-card rounded-xl flex items-center justify-center">
<span class="material-symbols-outlined text-2xl">devices</span>
</div>
<span class="mt-2 text-[10px] font-medium text-white/50 uppercase">App Dev</span>
</div>
<!-- Bottom Left -->
<div class="service-orbit absolute bottom-1/4 left-0 flex flex-col items-center opacity-60 hover:opacity-100 transition-opacity cursor-pointer" data-service="ml-models">
<div class="w-14 h-14 glass-card rounded-xl flex items-center justify-center">
<span class="material-symbols-outlined text-2xl">model_training</span>
</div>
<span class="mt-2 text-[10px] font-medium text-white/50 uppercase">ML Models</span>
</div>
<!-- Top Left -->
<div class="service-orbit absolute top-1/4 left-0 flex flex-col items-center opacity-60 hover:opacity-100 transition-opacity cursor-pointer" data-service="drip-marketing">
<div class="w-14 h-14 glass-card rounded-xl flex items-center justify-center">
<span class="material-symbols-outlined text-2xl">ads_click</span>
</div>
<span class="mt-2 text-[10px] font-medium text-white/50 uppercase">Drip Marketing</span>
</div>
</div>
<!-- Right Column: Technology Utilization Map -->
<div class="glass-card rounded-3xl p-8 relative overflow-hidden h-[500px] flex flex-col">
<div class="flex justify-between items-center mb-10">
<div>
<h3 class="text-xl font-bold">Tech Stack Utilization</h3>
<p class="text-white/40 text-sm">Real-time resource allocation</p>
</div>
<span class="material-symbols-outlined text-primary">query_stats</span>
</div>
<div class="flex-grow relative">
<!-- Connecting Lines (SVG) -->
<svg class="absolute inset-0 w-full h-full pointer-events-none" viewbox="0 0 400 300">
<!-- Paths to center -->
<path d="M50,50 L200,150" opacity="0.6" stroke="#9d25f4" stroke-dasharray="4 4" stroke-width="1.5"></path>
<path d="M350,50 L200,150" opacity="1" stroke="#9d25f4" stroke-width="2"></path>
<path d="M100,250 L200,150" opacity="0.3" stroke="#9d25f4" stroke-dasharray="4 4" stroke-width="1"></path>
<path d="M300,250 L200,150" opacity="0.8" stroke="#9d25f4" stroke-width="1.5"></path>
<!-- Active Pulse Circle -->
<circle cx="200" cy="150" fill="none" opacity="0.5" r="40" stroke="#9d25f4" stroke-width="1">
<animate attributename="r" dur="2s" from="40" repeatcount="indefinite" to="60"></animate>
<animate attributename="opacity" dur="2s" from="0.5" repeatcount="indefinite" to="0"></animate>
</circle>
</svg>
<!-- Tech Nodes -->
<!-- Python (Muted) -->
<div data-tech="Python" class="absolute top-0 left-0 flex items-center gap-3 p-3 bg-white/5 rounded-xl border border-white/10 opacity-40">
<img alt="Python Logo" class="w-6 h-6" data-alt="Python programming language logo white" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD64Va-5lL3skoYv95CdtMI0U-9ZJeVE1FMAkEGPFaGzxOp28ep_8svjc1qe3x8MIM2PhylJH5U2H7wb9WK8UjpruS5fnRLs5vJb6yuqWg4T6LJpiKl5CgvfLyzm64lhUc67c1HLJO7pvEQC2rcyGoMoiasgsep4Qds286vV9p-Z0Y2Gl53BCr3WTbM4hw2W5KWnDn_m8U_WkVDb0osJplNIGRhfEKgmKiEf-Ei1qo0jOYTwP0mf3quVSDkkLIk19_vUfKMJRiQKE2E"/>
<span class="text-sm font-medium">Python</span>
</div>
<!-- LangChain (Active) -->
<div data-tech="LangChain" class="absolute top-0 right-0 flex items-center gap-3 p-3 bg-primary/20 rounded-xl border border-primary/50 neon-glow">
<span class="material-symbols-outlined text-primary text-xl">link</span>
<span class="text-sm font-bold">LangChain</span>
</div>
<!-- Hugging Face (Active) -->
<div data-tech="Hugging Face" class="absolute bottom-10 right-10 flex items-center gap-3 p-3 bg-primary/20 rounded-xl border border-primary/50 neon-glow">
<span class="material-symbols-outlined text-primary text-xl">emoji_emotions</span>
<span class="text-sm font-bold">Hugging Face</span>
</div>
<!-- Azure (Muted) -->
<div data-tech="Azure ML" class="absolute bottom-10 left-10 flex items-center gap-3 p-3 bg-white/5 rounded-xl border border-white/10 opacity-40">
<img alt="Azure Logo" class="w-6 h-6" data-alt="Microsoft Azure cloud platform logo white" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDoPEwvVOl2Sf9H-elFu1p37jwdkHqHzfBFW4ncl6heuyu4Pyn1ZoBOfLe0N09xiE72_hSo0F7AnkQ58Ggo8RuZY5iqngCCa2Ff6qxPuZ6yrVOS46YSXxB_5PJr-E7PZnHL13jslnvUiKP9GkM2ODAL_1mIMdCCqJyqXE7S_YviXd9Ag2AFzU6R87bRio42qVF-hSg9NZ2l3g5SN-qGQhPeHjGrCmbpnkN365TffrqjPtAiJRRXY6hWSha-rGS35rhW67fBWjpwfBC"/>
<span class="text-sm font-medium">Azure ML</span>
</div>
<!-- Central Hub -->
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center">
<div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center shadow-[0_0_30px_rgba(157,37,244,0.6)]">
<span class="material-symbols-outlined text-white text-3xl">hub</span>
</div>
</div>
</div>
<div class="mt-auto grid grid-cols-3 gap-4 pt-6 border-t border-white/10">
<div class="text-center">
<p class="text-[10px] text-white/40 uppercase font-bold tracking-widest">Efficiency</p>
<p class="text-lg font-bold">98.2%</p>
</div>
<div class="text-center border-x border-white/10">
<p class="text-[10px] text-white/40 uppercase font-bold tracking-widest">Uptime</p>
<p class="text-lg font-bold text-primary">99.9%</p>
</div>
<div class="text-center">
<p class="text-[10px] text-white/40 uppercase font-bold tracking-widest">Latency</p>
<p class="text-lg font-bold">24ms</p>
</div>
</div>
</div>
</div>
<!-- Bottom CTA / Additional Info -->
<div class="mt-32 w-full grid grid-cols-1 md:grid-cols-3 gap-8">
<div class="glass-card p-6 rounded-2xl border-l-4 border-l-primary hover:bg-white/5 transition-colors group">
<div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-primary">verified_user</span>
</div>
<h4 class="text-lg font-bold mb-2">Secure by Design</h4>
<p class="text-sm text-white/50 leading-relaxed">Enterprise-grade encryption and privacy-first AI models tailored for your sensitive data.</p>
</div>
<div class="glass-card p-6 rounded-2xl border-l-4 border-l-primary hover:bg-white/5 transition-colors group">
<div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-primary">bolt</span>
</div>
<h4 class="text-lg font-bold mb-2">Rapid Deployment</h4>
<p class="text-sm text-white/50 leading-relaxed">Go from concept to production in weeks, not months, with our pre-built specialized modules.</p>
</div>
<div class="glass-card p-6 rounded-2xl border-l-4 border-l-primary hover:bg-white/5 transition-colors group">
<div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-primary">api</span>
</div>
<h4 class="text-lg font-bold mb-2">Seamless Integration</h4>
<p class="text-sm text-white/50 leading-relaxed">Easily connect our AI services to your existing stack with our comprehensive API documentation.</p>
</div>
</div>
</div>
<script>
const SERVICE_MAP = {
  "ai-solutions": {
    centerIcon: "psychology",
    tech: ["LangChain", "Hugging Face", "Python", "Azure ML"]
  },
  "web-dev": {
    centerIcon: "code",
    tech: ["Next.js", "React", "Tailwind", "MongoDB"]
  },
  "app-dev": {
    centerIcon: "devices",
    tech: ["Swift", "Android", "React Native", "Supabase"]
  },
  "ml-models": {
    centerIcon: "model_training",
    tech: ["Python", "AWS", "Hugging Face"]
  },
  "drip-marketing": {
    centerIcon: "ads_click",
    tech: ["Meta Ads", "AdSense", "Sheets", "Apps Script"]
  }
};

const orbits = document.querySelectorAll(".service-orbit");
const chips = document.querySelectorAll(".filter-chip");
const centerIcon = document.querySelector(".glass-card .material-symbols-outlined");

function activateService(service) {
  // Orbit highlight
  orbits.forEach(o => {
    o.classList.toggle("active", o.dataset.service === service);
    o.classList.toggle("opacity-60", o.dataset.service !== service);
  });

  // Chip highlight
  chips.forEach(c => {
    c.classList.toggle("bg-primary", c.dataset.service === service);
    c.classList.toggle("text-white", c.dataset.service === service);
    c.classList.toggle("bg-transparent", c.dataset.service !== service);
    c.classList.toggle("text-white/60", c.dataset.service !== service);

  });

  // Center icon swap
  centerIcon.textContent = SERVICE_MAP[service].centerIcon;

  // Tech nodes highlight
  document.querySelectorAll("[data-tech]").forEach(node => {
    const active = SERVICE_MAP[service].tech.includes(node.dataset.tech);
    node.classList.toggle("neon-glow", active);
    node.classList.toggle("opacity-40", !active);
    node.classList.toggle("bg-primary/20", active);
    node.classList.toggle("border-primary/50", active);
    node.classList.toggle("bg-white/5", !active);
    node.classList.toggle("border-white/10", !active);

  });
}

orbits.forEach(o => o.addEventListener("click", () => activateService(o.dataset.service)));
chips.forEach(c => c.addEventListener("click", () => activateService(c.dataset.service)));
</script>
</main>
