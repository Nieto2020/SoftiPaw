/**
 * GLOBO TERRAQUEO HOLOGRÁFICO (ESTILO IRON MAN)
 * Desarrollado para una fácil edición, mantenimiento e inclusión en PHP/JS.
 */

// ==========================================
// 1. PANEL DE CONFIGURACIÓN (Edita esto fácilmente)
// ==========================================
const CONFIG = {
    // Colores (Formato hexadecimal de Three.js: 0xRRGGBB)
    colorGlobo: 0x00aaff,      // Azul holograma base
    colorSonars: 0x00ffff,     // Cian brillante para los radares
    colorLineas: 0x00ffaa,     // Verde/Cian para las líneas de conexión
    colorParticulas: 0xff00ff, // Magenta para los datos que viajan
    
    // Dimensiones y diseño
    radioGlobo: 5,             // Tamaño del globo
    inclinacionX: 0.4,         // Inclinación hacia adelante/atrás (en radianes)
    inclinacionZ: 0.3,         // Inclinación lateral (Eje terrestre aprox.)
    
    // Velocidades y Cantidades
    velocidadRotacion: 0.003,  // Qué tan rápido gira el mundo
    cantidadSonars: 6,         // Cuántos puntos de sonar activos a la vez
    cantidadLineas: 4,         // Cuántas líneas de viaje activas
    velocidadViaje: 0.006      // Velocidad de los datos que viajan por las líneas
};

// ==========================================
// 2. INYECTOR AUTOMÁTICO DE DEPENDENCIAS Y ESTILOS
// ==========================================
const threeScript = document.createElement('script');
threeScript.src = "https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js";
threeScript.onload = () => {
    const controlsScript = document.createElement('script');
    controlsScript.src = "https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js";
    controlsScript.onload = inicializarEscena3D;
    document.head.appendChild(controlsScript);
};
document.head.appendChild(threeScript);

const estilos = document.createElement('style');
estilos.textContent = `
    #canvas-container-globe {
        position: fixed; top: 0; left: 0; width: 100vw; height: 100vh;
        z-index: -1; background-color: #020208; overflow: hidden;
    }
    #hud-globe {
        position: absolute; top: 20px; left: 20px; color: #00f0ff;
        text-shadow: 0 0 8px rgba(0, 240, 255, 0.6); pointer-events: none;
        letter-spacing: 2px; font-family: monospace; z-index: 10;
    }
    #hud-globe h1 { margin: 0; font-size: 16px; font-weight: bold; }
    #hud-globe p { margin: 5px 0 0 0; font-size: 10px; opacity: 0.7; }
`;
document.head.appendChild(estilos);

// ==========================================
// 3. LOGICA PRINCIPAL DE THREE.JS
// ==========================================
function inicializarEscena3D() {
    // Contenedores HTML creados dinámicamente
    const container = document.createElement('div');
    container.id = 'canvas-container-globe';
    document.body.appendChild(container);

    const hud = document.createElement('div');
    hud.id = 'hud-globe';
    hud.innerHTML = `<h1>MARK_LXXXV // GLOBAL_NET</h1><p>SONAR: ACTIVE // DATA_FLOW: STREAMING</p>`;
    document.body.appendChild(hud);

    // Escena, Cámara y Render
    const scene = new THREE.Scene();
    scene.fog = new THREE.FogExp2(0x020208, 0.015);

    const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 14;

    const renderer = new THREE.WebGLRenderer({ antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    container.appendChild(renderer.domElement);

    const controls = new THREE.OrbitControls(camera, renderer.domElement);
    controls.enableDamping = true;
    controls.dampingFactor = 0.05;

    // GRUPO PRINCIPAL (Contiene el globo y sus animaciones acopladas para que todo gire e incline junto)
    const globeGroup = new THREE.Group();
    // Aplicamos la inclinación configurada
    globeGroup.rotation.x = CONFIG.inclinacionX;
    globeGroup.rotation.z = CONFIG.inclinacionZ;
    scene.add(globeGroup);

    // El Globo Estructura (Wireframe)
    const globeGeo = new THREE.SphereGeometry(CONFIG.radioGlobo, 30, 30);
    const globeMat = new THREE.MeshBasicMaterial({
        color: CONFIG.colorGlobo, wireframe: true, transparent: true, opacity: 0.12, blending: THREE.AdditiveBlending
    });
    const globe = new THREE.Mesh(globeGeo, globeMat);
    globeGroup.add(globe);

    // Nodos de intersección (Puntos en la red)
    const pointsMat = new THREE.PointsMaterial({
        color: CONFIG.colorGlobo, size: 0.06, transparent: true, opacity: 0.5, blending: THREE.AdditiveBlending
    });
    const globePoints = new THREE.Points(globeGeo, pointsMat);
    globeGroup.add(globePoints);

    // Función útil para obtener coordenadas aleatorias exactamente en la superficie del globo
    function obtenerPuntoEnEsfera(radio) {
        const u = Math.random(); const v = Math.random();
        const theta = u * 2.0 * Math.PI; const phi = Math.acos(2.0 * v - 1.0);
        return new THREE.Vector3(
            radio * Math.sin(phi) * Math.cos(theta),
            radio * Math.sin(phi) * Math.sin(theta),
            radio * Math.cos(phi)
        );
    }

    // --- CREACIÓN DE ANIMACIONES: SONARS ---
    const listaSonars = [];
    for (let i = 0; i < CONFIG.cantidadSonars; i++) {
        const pos = obtenerPuntoEnEsfera(CONFIG.radioGlobo + 0.03); // Ligeramente despegado de la superficie
        
        // El sonar es un aro plano (Ring)
        const ringGeo = new THREE.RingGeometry(0.01, 0.25, 16);
        const ringMat = new THREE.MeshBasicMaterial({
            color: CONFIG.colorSonars, transparent: true, opacity: 1, side: THREE.DoubleSide, blending: THREE.AdditiveBlending
        });
        const sonarMesh = new THREE.Mesh(ringGeo, ringMat);
        sonarMesh.position.copy(pos);
        sonarMesh.lookAt(new THREE.Vector3(0, 0, 0)); // Hace que el plano quede plano sobre la curvatura

        globeGroup.add(sonarMesh);
        
        // Guardamos datos individuales de animación
        listaSonars.push({
            mesh: sonarMesh,
            velExpansion: 0.005 + Math.random() * 0.01,
            maxEscala: 1.5 + Math.random() * 2
        });
    }

    // --- CREACIÓN DE ANIMACIONES: LÍNEAS DE VIAJE Y PARTÍCULAS ---
    const listaLineas = [];
    for (let i = 0; i < CONFIG.cantidadLineas; i++) {
        const p1 = obtenerPuntoEnEsfera(CONFIG.radioGlobo + 0.02);
        const p2 = obtenerPuntoEnEsfera(CONFIG.radioGlobo + 0.02);

        // Crear una curva hacia afuera (Arco de viaje de datos)
        const puntoMedio = new THREE.Vector3().addVectors(p1, p2).multiplyScalar(0.5);
        puntoMedio.normalize().multiplyScalar(CONFIG.radioGlobo * 1.4); // Altura del arco

        const curva = new THREE.QuadraticBezierCurve3(p1, puntoMedio, p2);
        
        // Dibujar la línea estática del arco (sutil)
        const puntosCurva = curva.getPoints(30);
        const lineaGeo = new THREE.BufferGeometry().setFromPoints(puntosCurva);
        const lineaMat = new THREE.LineBasicMaterial({
            color: CONFIG.colorLineas, transparent: true, opacity: 0.25, blending: THREE.AdditiveBlending
        });
        const lineaMesh = new THREE.Line(lineaGeo, lineaMat);
        globeGroup.add(lineaMesh);

        // Dibujar el punto brillante que viajará por la curva
        const partGeo = new THREE.SphereGeometry(0.06, 8, 8);
        const partMat = new THREE.MeshBasicMaterial({
            color: CONFIG.colorParticulas, blending: THREE.AdditiveBlending
        });
        const particulaMesh = new THREE.Mesh(partGeo, partMat);
        globeGroup.add(partparticulaMesh = particulaMesh);

        listaLineas.push({
            curva: curva,
            particula: particulaMesh,
            progreso: Math.random() // Inician en puntos aleatorios del viaje
        });
    }

    // Anillo tecnológico externo estático en el espacio
    const ringGeoHUD = new THREE.RingGeometry(6.3, 6.33, 64);
    const ringMatHUD = new THREE.MeshBasicMaterial({
        color: CONFIG.colorGlobo, transparent: true, opacity: 0.2, side: THREE.DoubleSide, blending: THREE.AdditiveBlending
    });
    const ringHUD = new THREE.Mesh(ringGeoHUD, ringMatHUD);
    ringHUD.rotation.x = Math.PI / 2.5;
    scene.add(ringHUD);

    // ==========================================
    // 4. BUCLE DE ANIMACIÓN
    // ==========================================
    function animate() {
        requestAnimationFrame(animate);

        // Rotación constante del globo completo
        globeGroup.rotation.y += CONFIG.velocidadRotacion;
        ringHUD.rotation.z -= 0.002; // El anillo externo gira al revés

        // Animar Sonars (Pulsación)
        listaSonars.forEach(sonar => {
            sonar.mesh.scale.addScalar(sonar.velExpansion);
            // El desvanecimiento va ligado al tamaño
            sonar.mesh.material.opacity = 1 - (sonar.mesh.scale.x / sonar.maxEscala);

            // Si ya se desvaneció, reinicia en otra posición aleatoria
            if (sonar.mesh.material.opacity <= 0) {
                sonar.mesh.scale.set(0.1, 0.1, 0.1);
                const nuevaPos = obtenerPuntoEnEsfera(CONFIG.radioGlobo + 0.03);
                sonar.mesh.position.copy(nuevaPos);
                sonar.mesh.lookAt(new THREE.Vector3(0, 0, 0));
                sonar.mesh.material.opacity = 1;
            }
        });

        // Animar Partículas viajeras
        listaLineas.forEach(linea => {
            linea.progreso += CONFIG.velocidadViaje;
            if (linea.progreso > 1) linea.progreso = 0; // Reinicia el viaje al llegar al destino

            // Obtener la posición 3D exacta en ese porcentaje del viaje (0.0 a 1.0)
            const posicionActual = linea.curva.getPointAt(linea.progreso);
            linea.particula.position.copy(posicionActual);
        });

        controls.update();
        renderer.render(scene, camera);
    }

    // Ajuste dinámico de pantalla completa
    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });

    animate();
}