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
        <div class="card">
            <div class="card-icon">📱</div>
            <h3>Apps Android</h3>
            <p>Creamos aplicaciones Android nativas y multiplataforma, optimizadas para rendimiento y experiencia de usuario.</p>
        </div>
        <div class="card">
            <div class="card-icon">💵</div>
            <h3>Presupuesto personal</h3>
            <p>Nos ajustamos a tu Presupuesto empresas pequeñas, medianas, grandes y <strong>Emprendedores</strong>.</p>
        </div>
    </div>

    <!-- Sección de Quiénes Somos -->
    <div class="about-section">
    <div class="about-row">
        <div class="about-col-texto">
            <h2 class="about-titulo">¡Creamos <span class="about-destacado">magia digital</span> con sabor latino!</h2>
            <p class="about-descripcion">
                En <strong>SoftiPaw</strong> nos apasiona transformar ideas en soluciones digitales que rompen el molde. 
                No somos la típica agencia: somos un <strong>dream team multidisciplinario</strong> de desarrolladores web 
                y expertos en Inteligencia Artificial, Datos, Software y Redes para abordar cada reto con visión estratégica.
            </p>
            <p class="about-descripcion">
                Con nuestro corazón principalmente en <strong>México</strong> y talento estratégico en 
                <strong>Argentina, Chile y Colombia</strong>, combinamos la calidez y agilidad de nuestra región 
                con excelencia técnica de clase mundial para ofrecerte soluciones cercanas y de alto impacto.
            </p>
                <div class="about-badges">
                    <div class="about-badge">
                        <span class="about-badge-icon">🤖</span>
                        <span class="about-badge-texto">IA</span>
                    </div>
                    <div class="about-badge">
                        <span class="about-badge-icon">📊</span>
                        <span class="about-badge-texto">Datos</span>
                    </div>
                    <div class="about-badge">
                        <span class="about-badge-icon">💻</span>
                        <span class="about-badge-texto">Software</span>
                    </div>
                    <div class="about-badge">
                        <span class="about-badge-icon">🌐</span>
                        <span class="about-badge-texto">Redes</span>
                    </div>
                </div>
                <div class="about-paises">
                    <span class="about-pais">🇦🇷 Argentina</span>
                    <span class="about-pais destaque">🇲🇽 México</span>
                    <span class="about-pais">🇨🇱 Chile</span>
                    <span class="about-pais">🇨🇴 Colombia</span>
                </div>
            </div>
            <div class="about-col-carrusel">
                <div class="carrusel-track" id="carruselTrack">
                    <div class="carrusel-card">
                        <div class="carrusel-icon">🤖</div>
                        <h4>Inteligencia Artificial</h4>
                        <p>Modelos predictivos, NLP y automatización inteligente para tu negocio.</p>
                    </div>
                    <div class="carrusel-card">
                        <div class="carrusel-icon">📊</div>
                        <h4>Data & Analytics</h4>
                        <p>Transformamos tus datos en decisiones estratégicas con dashboards y big data.</p>
                    </div>
                    <div class="carrusel-card">
                        <div class="carrusel-icon">💻</div>
                        <h4>Ingeniería de Software</h4>
                        <p>Arquitecturas escalables, APIs robustas y código limpio para productos sólidos.</p>
                    </div>
                    <div class="carrusel-card">
                        <div class="carrusel-icon">🌐</div>
                        <h4>Redes & Infraestructura</h4>
                        <p>Cloud, seguridad y conectividad para que tu empresa opere sin interrupciones.</p>
                    </div>
                </div>
                <div class="carrusel-dots" id="carruselDots">
                    <span class="dot activo"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
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