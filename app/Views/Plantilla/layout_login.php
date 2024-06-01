<?php $enlace_actual = 'http://' . $_SERVER['HTTP_HOST'] . '/Sabores-Delicias/public/css/estilos.css'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo $enlace_actual; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body class="body">

    <?php echo $this->renderSection("contenido"); ?>

    <footer>
        <!-- Footer legal -->
        <section class="ft-legal">
            <ul class="ft-legal-list">
                <li class="ejemplo">&copy; 2024 Arquitectura de software.</li>
            </ul>
        </section>
    </footer>
</body>

</html>