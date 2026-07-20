<?php 
// Requerimos el header modular
require_once 'includes/header.php'; 
?>

<!-- Contenido dinámico específico de la página de inicio -->
<section class="inicio">
    <div class="row" style="text-align: left;">
        <div class="col">
            <h1 class="hero-animate">Proyectos digitales a medida para tu negocio</h1>
            <p class="hero-animate-delay-1"><strong>Diseñamos y desarrollamos soluciones web personalizadas que impulsan tus resultados.</strong></p>
            <div class="btn-group hero-animate-delay-2" style="justify-content: flex-start;">
                <a href="contacto.php" class="btn btn-primary">Comenzar proyecto →</a>
                <a href="#servicios" class="btn btn-outline">Ver servicios</a>
                <a href="repo.php" class="btn btn-outline">💾 Repositorio</a>
            </div>
        </div>
        <div class="col-side hero-image-col hero-animate-delay-3">
            <div class="hero-carousel">
                <div class="hero-carousel-track" id="heroCarousel">
                    <img src="assets/img/ss_dashboardapp.png" alt="Dashboard App" class="hero-carousel-img">
                    <img src="assets/img/ss_dentistapp.png" alt="Dentist App" class="hero-carousel-img">
                    <img src="assets/img/ss_taxiapp.png" alt="Taxi App" class="hero-carousel-img">
                </div>
                <div class="hero-carousel-dots" id="heroCarouselDots">
                    <span class="hdot activo"></span>
                    <span class="hdot"></span>
                    <span class="hdot"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Tarjetas de servicios -->
    <div class="grid" id="servicios">
        <div class="showcase">
            <div class="showcase-icon">🎨</div>
            <h3>Diseño UI/UX</h3>
            <p>Creamos interfaces intuitivas y atractivas que cautivan a tus usuarios desde el primer clic.</p>
        </div>
        <div class="showcase">
            <div class="showcase-icon">⚡</div>
            <h3>Desarrollo Web</h3>
            <p>Construimos aplicaciones web rápidas, seguras y escalables con tecnologías de vanguardia.</p>
        </div>
        <div class="showcase">
            <div class="showcase-icon">🧑‍💻</div>
            <h3>Software a Medida</h3>
            <p>Desarrollamos plataformas y sistemas personalizados adaptados a las necesidades únicas de tu empresa.</p>
        </div>
        <div class="showcase">
            <div class="showcase-icon">💡</div>
            <h3>Consultoría Tecnológica</h3>
            <p>Te asesoramos en la estrategia digital, arquitectura tech y las mejores soluciones para tu proyecto.</p>
        </div>
        <div class="showcase">
            <div class="showcase-icon">📱</div>
            <h3>Apps Android</h3>
            <p>Creamos aplicaciones Android nativas y multiplataforma, optimizadas para rendimiento y experiencia de usuario.</p>
        </div>
        <div class="showcase">
            <div class="showcase-icon">💵</div>
            <h3>Presupuesto personal</h3>
            <p>Nos ajustamos a tu Presupuesto empresas pequeñas, medianas, grandes y <strong>Emprendedores</strong>.</p>
        </div>
    </div>

    <!-- Sección de Quiénes Somos -->
    <div class="box">
    <div class="row">
        <div class="col">
        <h2 class="about-titulo">SoftiPaw: <span class="about-destacado">¿QUIENES SOMOS?</h2></span>
            <p class="about-descripcion">
                En <strong>SoftiPaw</strong> transformamos tus ideas en experiencias digitales únicas. 
                Somos un <strong>equipo creativo y técnico</strong> que combina desarrollo web, inteligencia artificial 
                y soluciones de datos para llevar tu proyecto más allá de lo esperado.
            </p>
            <p class="about-descripcion">
                <strong>Tu visión, nuestra misión:</strong> juntos hacemos que la tecnología trabaje para ti.
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
            <div class="col-side">
                <div class="carousel" id="carousel">
                    <div class="carousel-item">
                        <div class="carousel-icon">🤖</div>
                        <h4>Inteligencia Artificial</h4>
                        <p>Modelos predictivos, NLP y automatización inteligente para tu negocio.</p>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-icon">📊</div>
                        <h4>Data & Analytics</h4>
                        <p>Transformamos tus datos en decisiones estratégicas con dashboards y big data.</p>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-icon">💻</div>
                        <h4>Ingeniería de Software</h4>
                        <p>Arquitecturas escalables, APIs robustas y código limpio para productos sólidos.</p>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-icon">🌐</div>
                        <h4>Redes & Infraestructura</h4>
                        <p>Cloud, seguridad y conectividad para que tu empresa opere sin interrupciones.</p>
                    </div>
                </div>
                <div class="carousel-dots" id="carouselDots">
                    <span class="dot activo"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de confianza unificada -->
    <div class="box box-trust">
        <div class="trust-header">
            <span class="trust-badge">🛡️ Profesionales</span>
        </div>
        <p class="trust-texto">
            No le confíes <strong>todo</strong> tu negocio <strong class="resaltar">100%</strong> a la IA con personas sin experiencia o sin conocimientos, <strong class="resaltar">lo barato sale caro</strong>.
        </p>
        <p class="trust-sub">
            Nosotros somos <strong>profesionales</strong> con años resolviendo problemas reales. Cuidamos tu empresa como si fuera nuestra.
        </p>
        <div class="trust-features">
            <div class="trust-feat">
                <span class="feat-icon">🔒</span>
                <span class="feat-label">Seguridad</span>
            </div>
            <div class="trust-feat">
                <span class="feat-icon">🎯</span>
                <span class="feat-label">Precisión</span>
            </div>
            <div class="trust-feat">
                <span class="feat-icon">🏆</span>
                <span class="feat-label">Experiencia</span>
            </div>
        </div>
    </div>

    <!-- Sección de estadísticas / confianza -->
    <div class="stats-grid">
        <div class="stat-item">
            <div class="stat-numero">20+</div>
            <div class="stat-label">Proyectos entregados</div>
        </div>
        <div class="stat-item">
            <div class="stat-numero">12+</div>
            <div class="stat-label">Clientes satisfechos</div>
        </div>
        <div class="stat-item">
            <div class="stat-numero">3+</div>
            <div class="stat-label">Años de experiencia</div>
        </div>
    </div>
</section>

<?php 
// Requerimos el footer modular
require_once 'includes/footer.php'; 
?>