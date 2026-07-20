<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoftiPaw - Estudio Digital</title>
    <meta name="description" content="SoftiPaw - Transformamos ideas en experiencias digitales impactantes. Diseño y desarrollo web moderno.">
    <meta name="theme-color" content="#FFF8F8">
    <link rel="icon" type="image/png" href="assets/img/icon_logo.png">
    <link rel="stylesheet" href="css/layout.css">
</head>
<body>

<div id="particles-js"></div>

<header class="header-principal">
    <div class="contenedor">
        <div class="logo">
            <a href="index.php" class="logo-link">
                <span class="logo-paw"><img src="./assets/svg/paw2.svg" alt="Huella de perro"></span>
                <span class="logo-texto">SoftiPaw</span>
            </a>
        </div>
<?php $pagina = basename($_SERVER['PHP_SELF']); ?>
        <nav class="navegacion">
            <a href="index.php" <?php echo $pagina === 'index.php' ? 'class="activo"' : ''; ?>>Inicio</a>
            <a href="contacto.php" <?php echo $pagina === 'contacto.php' ? 'class="activo"' : ''; ?>>Contacto</a>
        </nav>
    </div>
</header>

<a href="particulas.php" class="btn-particulas" title="Abrir fondo interactivo">
    <img src="assets/img/icon_logo.png" alt="Partículas" class="btn-particulas-img">
</a>

<main class="contenido-principal contenedor">