?php
function enlace($url)
{
    $enlace = 'http://' . $_SERVER['HTTP_HOST'] . $url;
    echo $enlace;
}
?>
<!-- Carpeta en la cual se encuentra el layout -->
<?php echo $this->extend('Plantilla/layout_contador'); ?>
<!-- Nombre del contenido en el layout -->
<?php echo $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Fechas</title>
</head>
<body>
    <h1>Seleccionar Fechas</h1>
    <form action="/contador/consultar_informe" method="post">
        <label for="fecha_inicial">Fecha Inicial:</label>
        <input type="date" id="fecha_inicial" name="fecha_inicial" required>
        <br>
        <label for="fecha_final">Fecha Final:</label>
        <input type="date" id="fecha_final" name="fecha_final" required>
        <br>
        <button type="submit">Consultar</button>
    </form>
</body>
</html>

<?php echo $this->endSection(); ?>