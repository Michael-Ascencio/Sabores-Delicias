<?php $enlace_actual = 'http://'.$_SERVER['HTTP_HOST'].'/Sabores-Delicias/public/css/estilos.css'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo $enlace_actual; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo esc($titulo); ?> </title>
</head>

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
            <li class ="ejemplo">&copy; 2024 Arquitectura de software.</li>
        </ul>
    </section>
</footer>
</body>
</html>