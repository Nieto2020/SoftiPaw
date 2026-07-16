<?php 
require_once 'includes/header.php'; 
?>

<section class="inicio">
    <h1>Hablemos de tu proyecto</h1>
    <p>Cuéntanos sobre tu idea y te contactaremos en menos de 24 horas.</p>

    <div class="card" style="max-width: 600px; width: 100%; margin-top: 2rem; text-align: left;">
        <form style="display: flex; flex-direction: column; gap: 1.2rem;">
            <div>
                <label style="display: block; font-size: 0.85rem; font-weight: 600; color: var(--color-texto-muted); margin-bottom: 0.4rem;">Nombre completo</label>
                <input type="text" placeholder="Tu nombre" style="width: 100%; padding: 0.85rem 1rem; border-radius: var(--radius-sm); border: 1px solid rgba(255,255,255,0.1); background: rgba(255,255,255,0.04); color: var(--color-texto); font-family: var(--fuente-base); font-size: 0.95rem; transition: var(--transition); outline: none;" onfocus="this.style.borderColor='var(--color-principal-light)'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">
            </div>
            <div>
                <label style="display: block; font-size: 0.85rem; font-weight: 600; color: var(--color-texto-muted); margin-bottom: 0.4rem;">Correo electrónico</label>
                <input type="email" placeholder="tu@correo.com" style="width: 100%; padding: 0.85rem 1rem; border-radius: var(--radius-sm); border: 1px solid rgba(255,255,255,0.1); background: rgba(255,255,255,0.04); color: var(--color-texto); font-family: var(--fuente-base); font-size: 0.95rem; transition: var(--transition); outline: none;" onfocus="this.style.borderColor='var(--color-principal-light)'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'">
            </div>
            <div>
                <label style="display: block; font-size: 0.85rem; font-weight: 600; color: var(--color-texto-muted); margin-bottom: 0.4rem;">Mensaje</label>
                <textarea rows="5" placeholder="Cuéntanos sobre tu proyecto..." style="width: 100%; padding: 0.85rem 1rem; border-radius: var(--radius-sm); border: 1px solid rgba(255,255,255,0.1); background: rgba(255,255,255,0.04); color: var(--color-texto); font-family: var(--fuente-base); font-size: 0.95rem; resize: vertical; transition: var(--transition); outline: none;" onfocus="this.style.borderColor='var(--color-principal-light)'" onblur="this.style.borderColor='rgba(255,255,255,0.1)'"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="align-self: flex-start; cursor: pointer;">Enviar mensaje ✨</button>
        </form>
    </div>
</section>

<?php 
require_once 'includes/footer.php'; 
?>