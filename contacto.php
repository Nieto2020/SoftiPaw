<?php 
require_once 'includes/header.php'; 
?>

<section class="inicio">
    <h1>Hablemos de tu proyecto</h1>
    <p>Cuéntanos sobre tu idea y te contactaremos en menos de 24 horas.</p>

    <div class="showcase form-card">
        <form class="form">
            <div class="form-group">
                <label class="form-label">Nombre completo</label>
                <input type="text" placeholder="Tu nombre" class="form-input">
            </div>
            <div class="form-group">
                <label class="form-label">Correo electrónico</label>
                <input type="email" placeholder="tu@correo.com" class="form-input">
            </div>
            <div class="form-group">
                <label class="form-label">Mensaje</label>
                <textarea rows="5" placeholder="Cuéntanos sobre tu proyecto..." class="form-textarea"></textarea>
            </div>
            <button type="submit" class="btn btn-primary form-btn">Enviar mensaje ✨</button>
        </form>
    </div>
</section>

<?php 
require_once 'includes/footer.php'; 
?>