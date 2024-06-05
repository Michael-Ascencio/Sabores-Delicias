<?php $css = 'http://' . $_SERVER['HTTP_HOST'] . ('/Sabores-Delicias/public/css/estilos.css'); ?>
<?php $logo = 'http://' . $_SERVER['HTTP_HOST'] . ('/Sabores-Delicias/public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo $css; ?>">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="entorno">


<div class="menu">
    <ul>
        <li><a href="entorno">Productos</a></li>
        <li><a href="consumo">Consumo</a></li>
        <li><a href="configuracion">Configuración</a></li>
        <li><a href="<?php base_url('/logincliente');?>">Cerrar sesión</a></li>
    </ul>
</div>

    <?php echo $this->renderSection("contenido"); ?>

    <!--<footer>
         Footer legal -->
            <!-- <section class="ft-legal">
            <ul class="ft-legal-list">
                <li class="ejemplo">&copy; 2024 Arquitectura de software.</li>
            </ul>
        </section>
    </footer>-->
</body>
</html>