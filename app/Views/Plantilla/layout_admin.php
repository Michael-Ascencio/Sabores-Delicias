<?php $css = 'http://' . $_SERVER['HTTP_HOST'] . ('/Sabores-Delicias/public/css/estilos.css'); ?>
<?php $logo = 'http://' . $_SERVER['HTTP_HOST'] . ('/Sabores-Delicias/public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png'); ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo $css; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo esc($titulo); ?> </title>
</head>

<body >
    <header>
        <nav class="menu">
            
            <ul>
                <li><a href="entorno_administrador.php">Inicio</a></li>
                <li><a href="#">Configuración de Cuenta</a></li>
                <li><a href="../index.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
        <img src=<?php echo $logo; ?> alt="" class="logo5">
    </header>

    <?php echo $this->renderSection("contenido"); ?>

    <footer>
        <!--
        <! <section class="ft-legal">
            <ul class="ft-legal-list">
                <li class="ejemplo">&copy; 2024 Arquitectura de software.</li>
            </ul>
        </section>
    </footer>-->
</body>

</html>