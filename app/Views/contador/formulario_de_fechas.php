<!-- Carpeta en la cual se encuentra el layout -->
<?= $this->extend('Plantilla/layout_contador'); ?>

<!-- Nombre del contenido en el layout -->
<?= $this->section('contenido'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Fechas</title>
</head>
<body>
    <h1>Seleccionar Fechas</h1>
    <form action="<?= base_url('contador/consultar_informe') ?>" method="post">
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

<?= $this->endSection(); ?>