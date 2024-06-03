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
<h2 class="Gestionar2">Gestionar empresa</h2>

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


<form class="form" method="post" action="<?=base_url('/Sabores-Delicias/public/administrador/entorno_gestionar_empresa')?>">
    <p class="title">Modificar empresa</p>
    <p class="message">Datos de la empresa <?php echo $tienda->nombre?> </p>
    <div class="flex">
        <label>
            <input class="input" type="number" required name="nit" value="<?php echo $tienda->nit?>">
            <span>NIT</span>
        </label>
        <label>
            <input class="input" type="text" required name="nombre" value="<?php echo $tienda->nombre?>">
            <span>Nombre</span>
        </label>
    </div>
    <label>
        <input class="input" type="text" required name="direccion" value="<?php echo $tienda->direccion?>">
        <span>Dirección</span>
    </label>
    <label>
        <input class="input" type="number" required name="telefono" value="<?php echo $tienda->telefono?>">
        <span>Teléfono</span>
    </label>
    <button class="submit" type="submit">Registrar</button>

</form>

<?php echo $this->endSection(); ?>