<?php 
// Requerimos el header modular
require_once 'includes/header.php'; 
?>

<!-- Contenido dinámico específico de la página de inicio -->
<section class="inicio">
    <h1>Proyectos digitales a medida para tu negocio</h1>
    <p>Diseñamos y desarrollamos soluciones web personalizadas que impulsan tus resultados.</p>

    <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center; margin-top: 0.5rem;">
        <a href="contacto.php" class="btn btn-primary">Comenzar proyecto →</a>
        <a href="#servicios" class="btn btn-outline">Ver servicios</a>
    </div>

    <!-- Tarjetas de servicios -->
    <div class="card-grid" id="servicios">
        <div class="card">
            <div class="card-icon">🎨</div>
            <h3>Diseño UI/UX</h3>
            <p>Creamos interfaces intuitivas y atractivas que cautivan a tus usuarios desde el primer clic.</p>
        </div>
        <div class="card">
            <div class="card-icon">⚡</div>
            <h3>Desarrollo Web</h3>
            <p>Construimos aplicaciones web rápidas, seguras y escalables con tecnologías de vanguardia.</p>
        </div>
        <div class="card">
            <div class="card-icon">�️</div>
            <h3>Software a Medida</h3>
            <p>Desarrollamos plataformas y sistemas personalizados adaptados a las necesidades únicas de tu empresa.</p>
        </div>
        <div class="card">
            <div class="card-icon">💡</div>
            <h3>Consultoría Tecnológica</h3>
            <p>Te asesoramos en la estrategia digital, arquitectura tech y las mejores soluciones para tu proyecto.</p>
        </div>
    </div>

    <!-- Sección de estadísticas / confianza -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 2rem; width: 100%; margin-top: 3rem; padding: 2rem 0; border-top: 1px solid rgba(255,255,255,0.06);">
        <div style="text-align: center;">
            <div style="font-size: 2rem; font-weight: 800; background: linear-gradient(135deg, var(--color-principal-light), var(--color-acento)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">50+</div>
            <div style="color: var(--color-texto-muted); font-size: 0.85rem; margin-top: 0.3rem;">Proyectos entregados</div>
        </div>
        <div style="text-align: center;">
            <div style="font-size: 2rem; font-weight: 800; background: linear-gradient(135deg, var(--color-principal-light), var(--color-acento)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">30+</div>
            <div style="color: var(--color-texto-muted); font-size: 0.85rem; margin-top: 0.3rem;">Clientes felices</div>
        </div>
        <div style="text-align: center;">
            <div style="font-size: 2rem; font-weight: 800; background: linear-gradient(135deg, var(--color-principal-light), var(--color-acento)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">5★</div>
            <div style="color: var(--color-texto-muted); font-size: 0.85rem; margin-top: 0.3rem;">Valoración media</div>
        </div>
    </div>
</section>

<?php 
// Requerimos el footer modular
require_once 'includes/footer.php'; 
?>