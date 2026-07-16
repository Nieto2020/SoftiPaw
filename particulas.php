<?php
// Página dedicada al fondo interactivo sin límites
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftiPaw - Fondo Interactivo</title>
    <meta name="theme-color" content="#0F172A">
    <link rel="icon" type="image/png" href="assets/img/icon_logo.png">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background: #0F172A; overflow: hidden; }
        #particles-js {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            z-index: 0;
            background: #0F172A;
        }
        .btn-volver {
            position: fixed;
            top: 1rem;
            left: 1rem;
            z-index: 10;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid rgba(255,255,255,0.2);
            background: rgba(15,23,42,0.8);
            backdrop-filter: blur(10px);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            box-shadow: 0 0 15px rgba(99,102,241,0.3), inset 0 0 8px rgba(99,102,241,0.15);
        }
        .btn-volver:hover {
            border-color: rgba(99,102,241,0.6);
            box-shadow: 0 0 25px rgba(99,102,241,0.5), inset 0 0 15px rgba(99,102,241,0.25);
            transform: scale(1.1);
        }
        .btn-volver svg {
            width: 18px;
            height: 18px;
            fill: none;
            stroke: #94A3B8;
            stroke-width: 2.5;
        }
        .btn-volver:hover svg { stroke: #fff; }
    </style>
</head>
<body>
    <div id="particles-js"></div>
    <a href="index.php" class="btn-volver" title="Volver al inicio">
        <svg viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
    </a>
    <script>
        if (typeof particlesJS !== 'undefined') {
            particlesJS.load('particles-js', 'assets/particles.json', function () {
                const pJS = window.pJSDom[0].pJS;

                function hexToRgb(hex) {
                    const n = parseInt(hex.slice(1), 16);
                    return { r: (n >> 16) & 255, g: (n >> 8) & 255, b: n & 255 };
                }

                function hslAHex(h, s, l) {
                    l /= 100;
                    const a = s * Math.min(l, 1 - l) / 100;
                    const f = n => {
                        const k = (n + h / 30) % 12;
                        const color = l - a * Math.max(Math.min(k - 3, 9 - k, 1), -1);
                        return Math.round(255 * color).toString(16).padStart(2, '0');
                    };
                    return '#' + f(0) + f(8) + f(4);
                }

                function bucle() {
                    const hue = (Date.now() / 50) % 360;
                    const color = hslAHex(hue, 50, 55);
                    const rgb = hexToRgb(color);
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
                    requestAnimationFrame(bucle);
                }
                bucle();
            });
        }
    </script>
</body>
</html>
