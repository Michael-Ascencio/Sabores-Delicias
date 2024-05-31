<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="Plantill/estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo esc($titulo); ?> </title>
</head>
<!-- STYLES -->

<style {csp-style-nonce}>

</style>
<body class="body4">
    <header>
        <nav class="menu1">
          <img src="../../../public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png" alt="" class="logo5">
          <ul>
            <li><a href="entorno_administrador.php">Inicio</a></li>
            <li><a href="#">Configuración de Cuenta</a></li>
            <li><a href="../index.php">Cerrar Sesión</a></li>
          </ul>
        </nav>
    </header>

<?php echo $this->renderSection("contenido"); ?>

<footer>
      <!-- Footer legal -->
    <section class="ft-legal">
        <ul class="ft-legal-list">
            <li><a href="#">Terminos &amp; Condiciones</a></li>
            <li><a href="#">Politica de privacidad</a></li>
            <li>&copy; 2024 Arquitectura de software.</li>
        </ul>
    </section>
</footer>
</body>
</html>