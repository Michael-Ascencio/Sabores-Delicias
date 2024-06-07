<?php
function enlace($url)
{
    $enlace = 'http://' . $_SERVER['HTTP_HOST'] . $url;
    echo $enlace;
}
?>
<!-- Carpeta en la cual se encuentra el layout -->
<?php echo $this->extend('Plantilla/layout_admin'); ?>
<!-- Nombre del contenido en el layout -->
<?php echo $this->section('contenido'); ?>

<?php if (session()->has('success')): ?>
    <div class="alert alert-success">
        <?= session('success') ?>
    </div>
<?php endif; ?>

<?php if (session()->has('error')): ?>
    <div class="alert alert-success">
        <?= session('error') ?>
    </div>
<?php endif; ?>

<div class="imagen_inventario">
    <img src="<?= enlace('/Sabores-Delicias/public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png');?>" alt="" class="inventario">
</div>
<form class="form" method="post" action="<?=base_url('administrador/entorno_registro_inventario')?>">
    <p class="title">Registrar Inventario</p>
    <label>
        <input class="input" type="number" required name="Producto_id_producto">
        <span>Producto_id_producto</span>
    </label>
    <label>
        <input class="input" type="number" required name="Tienda_cod_postal">
        <span>Tienda_cod_postal</span>
    </label>
    <label>
        <input class="input" type="number" required name="Cantidad">
        <span>Cantidad</span>
    </label> 
    <label>
        <input class="input" type="text" required name="fecha_caducidad" >
        <span>fecha_caducidad</span>
    </label>
    <label>
        <input class="input" type="text" required name="lote" >
        <span>lote</span>
    </label>
    <button class="submit">Registrar</button>
    <button class="btn btn-success" onclick="window.location.href='entorno_inventario';" type="button">Regresar</button>
</form>

<?php echo $this->endSection(); ?>