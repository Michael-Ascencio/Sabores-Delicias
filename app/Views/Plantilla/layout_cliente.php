<?php
function enlace($url)
{
    $enlace = 'http://' . $_SERVER['HTTP_HOST'] . $url;
    echo $enlace;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../../public/css/estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="entorno">

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