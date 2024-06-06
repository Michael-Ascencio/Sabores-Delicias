<?php
function enlace($url)
{
    $enlace = 'http://' . $_SERVER['HTTP_HOST'] . $url;
    echo $enlace;
}
?>

<!-- Carpeta en la cual se encuentra el layout -->
<?= $this->extend('Plantilla/layout_login'); ?>
<!-- Nombre del contenido en el layout -->
<?= $this->section('contenido'); ?>

<div class="imagen_inventario">
    <img src="<?= enlace('/Sabores-Delicias/public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png');?>" alt="" class="inventario">
</div>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="css/estilo.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    <h3 class="my-3">Nuevo inventario</h3>

    <?php if (session()->getFlashdata('error') !== null) { ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error'); ?>
    </div>
    <?php } ?>

    <form action="<?= base_url('Administrador/validacionInventario') ?>" class="row g-3" method="post" autocomplete="off">

        <div class="col-md-6">
            <label for="Id_Tienda" class="form-label">Id_Tienda</label>
            <input type="text" class="form-control" id="Id_Tienda" name="Tienda_cod_postal" value="<?= set_value('Tienda_cod_postal') ?>"required autofocus>
        </div>

        <div class="col-md-6">
            <label for="Id_producto" class="form-label">Id_producto</label>
            <input type="text" class="form-control" id="Id_producto" name="Producto_id_producto" required>
        </div>

        <div class="col-md-6">
            <label for="Cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="Cantidad" name="cantidad" required>
        </div>

        <div class="col-md-6">
            <label for="Lote" class="form-label">Lote</label>
            <input type="text" class="form-control" id="Lote" name="lote" required>
        </div>

        <div class="col-md-6">
            <label for="Fecha_caducidad" class="form-label">Fecha_caducidad</label>
            <input type="date" class="form-control" id="fFecha_caducidad" name="fecha_caducidad" required>
        </div>
        
        <div class="col-12">
            <button class="btn btn-success" onclick="window.location.href='entorno_inventario';" >Regresar</button>
            <button class="btn btn-success" type="submit">Guardar</button>
</div>
        </div>

    </form>

</body>

</html>
<?= $this->endSection(); ?>