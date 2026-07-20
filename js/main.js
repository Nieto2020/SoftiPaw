// Animación de entrada para las tarjetas con Intersection Observer
document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.showcase');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });

    cards.forEach((card, i) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = `opacity 0.6s ease, transform 0.6s ease`;
        card.style.transitionDelay = `${i * 0.1}s`;
        observer.observe(card);
    });

    // Smooth scroll para los enlaces internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // ─── Carrusel de Quiénes Somos ───
    const track = document.getElementById('carousel');
    const dots = document.querySelectorAll('#carouselDots .dot');
    if (track && dots.length) {
        let index = 0;
        const total = dots.length;
        let interval;

        function irA(i) {
            index = i;
            track.style.transform = `translateX(-${index * 100}%)`;
            dots.forEach((d, n) => d.classList.toggle('activo', n === index));
        }

        function siguiente() { irA((index + 1) % total); }

        interval = setInterval(siguiente, 4000);

        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                irA(i);
                clearInterval(interval);
                interval = setInterval(siguiente, 4000);
            });
        });
    }
    // ─── Carrusel Hero ───
    const heroTrack = document.getElementById('heroCarousel');
    const heroDots = document.querySelectorAll('#heroCarouselDots .hdot');
    if (heroTrack && heroDots.length) {
        let hi = 0;
        function heroIr(i) { hi = i; heroTrack.style.transform = `translateX(-${hi * 100}%)`; heroDots.forEach((d, n) => d.classList.toggle('activo', n === hi)); }
        setInterval(() => heroIr((hi + 1) % heroDots.length), 4000);
        heroDots.forEach((d, i) => d.addEventListener('click', () => heroIr(i)));
    }
    if (typeof particlesJS !== 'undefined') {
        particlesJS.load('particles-js', 'assets/particles.json', function () {
            const pJS = window.pJSDom[0].pJS;
            const BASE = 130; // valor inicial de particles.json
            let limpiezaActiva = false;

            function bucleParticulas() {
                const ahora = Date.now();

                // Color: recorre todo el arcoíris (hue 0 → 360)
                const hue = (ahora / 50) % 360;
                const color = hslAHex(hue, 50, 55);
                const rgb = hexToRgb(color);

                // Actualizar color global y de cada partícula (value + rgb para draw)
                pJS.particles.color.value = color;
                pJS.particles.line_linked.color = color;
                pJS.particles.array.forEach(p => {
                    p.color.value = color;
                    if (p.color.rgb) {
                        p.color.rgb.r = rgb.r;
                        p.color.rgb.g = rgb.g;
                        p.color.rgb.b = rgb.b;
                    }
                });

                // Limpiar exceso de nodos (> BASE + 40) cada cierto tiempo
                const sobrante = pJS.particles.array.length - (BASE + 40);
                if (sobrante > 0 && !limpiezaActiva) {
                    limpiezaActiva = true;
                    setTimeout(() => {
                        pJS.particles.array.splice(-sobrante, sobrante);
                        pJS.particles.number.value = pJS.particles.array.length;
                        limpiezaActiva = false;
                    }, 10000);
                }

                requestAnimationFrame(bucleParticulas);
            }

            bucleParticulas();
        });
    }

    // Conversión HSL → Hex para compatibilidad con particles.js
    function hslAHex(h, s, l) {
        l /= 100;
        const a = s * Math.min(l, 1 - l) / 100;
        const f = n => {
            const k = (n + h / 30) % 12;
            const color = l - a * Math.max(Math.min(k - 3, 9 - k, 1), -1);
            return Math.round(255 * color).toString(16).padStart(2, '0');
        };
        return `#${f(0)}${f(8)}${f(4)}`;
    }

    // Conversión Hex → RGB para actualizar partículas correctamente
    function hexToRgb(hex) {
        const n = parseInt(hex.slice(1), 16);
        return { r: (n >> 16) & 255, g: (n >> 8) & 255, b: n & 255 };
    }
});