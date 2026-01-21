document.addEventListener('DOMContentLoaded', () => {
    const heroContainer = document.getElementById('hero-container');
    const spiralGradient = document.getElementById('spiral-gradient');
    const gridOverlay = document.getElementById('grid-overlay');
    const activeNodes = document.getElementById('active-nodes');
    const apiLatency = document.getElementById('api-latency');

    if (!heroContainer) return;

    // --- Parallax Effect ---
    heroContainer.addEventListener('mousemove', (e) => {
        const { clientX, clientY } = e;
        const { offsetWidth, offsetHeight } = heroContainer;
        
        const x = (clientX / offsetWidth - 0.5) * 2; // -1 to 1
        const y = (clientY / offsetHeight - 0.5) * 2; // -1 to 1

        if (spiralGradient) {
            spiralGradient.style.transform = `translate(${-x * 20}px, ${-y * 20}px)`;
        }
        if (gridOverlay) {
            gridOverlay.style.backgroundPosition = `${x * 40}px ${y * 40}px`;
        }
    });

    // --- Number Flow Effect ---
    const animateNumber = (element, start, end, duration, suffix = '', prefix = '') => {
        if (!element) return;
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const currentNumber = Math.floor(progress * (end - start) + start);
            element.textContent = `${prefix}${currentNumber.toLocaleString()}${suffix}`;
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    };

    // Initial animation
    animateNumber(activeNodes, 15000, 18370, 2500, '+');
    animateNumber(apiLatency, 50, 12, 2000, 'ms');

    // Re-trigger on interval to simulate live data
    setInterval(() => {
        const randomNodes = 18000 + Math.floor(Math.random() * 1000);
        const randomLatency = 8 + Math.floor(Math.random() * 10);
        animateNumber(activeNodes, parseInt(activeNodes.textContent.replace(/\D/g, '')), randomNodes, 1500, '+');
        animateNumber(apiLatency, parseInt(apiLatency.textContent.replace(/\D/g, '')), randomLatency, 1000, 'ms');
    }, 5000);
});
