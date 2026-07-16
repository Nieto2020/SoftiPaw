<?php 
// Requerimos el header modular
require_once 'includes/header.php'; 
?>

<!-- Contenido dinámico específico de la página de inicio -->
<section class="inicio">
    <h1>Proyectos digitales a medida para tu negocio</h1>
    <p>Diseñamos y desarrollamos soluciones web personalizadas que impulsan tus resultados.</p>

    <div class="btn-group">
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
            <div class="card-icon">🧑‍💻</div>
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
    <div class="stats-grid">
        <div class="stat-item">
            <div class="stat-numero">50+</div>
            <div class="stat-label">Proyectos entregados</div>
        </div>
        <div class="stat-item">
            <div class="stat-numero">30+</div>
            <div class="stat-label">Clientes felices</div>
        </div>
        <div class="stat-item">
            <div class="stat-numero">5★</div>
            <div class="stat-label">Valoración media</div>
        </div>
    </div>
</section>

<?php 
// Requerimos el footer modular
require_once 'includes/footer.php'; 
?>