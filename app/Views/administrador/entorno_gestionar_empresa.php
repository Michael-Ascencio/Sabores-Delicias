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
    <p class="title">Registrar empresa</p>
    <p class="message">Ingrese la empresa que desea Registrar  </p>
    <div class="flex">
        <label>
            <input class="input" type="number" required name="nit">
            <span>NIT</span>
        </label>
        <label>
            <input class="input" type="text" required name="nombre">
            <span>Nombre</span>
        </label>
    </div>
    <label>
        <input class="input" type="text" required name="direccion">
        <span>Dirección</span>
    </label>
    <label>
        <input class="input" type="number" required name="telefono">
        <span>Teléfono</span>
    </label>
    <button class="submit" type="submit">Registrar</button>

</form>
<div class="consultar-modificar">
    <h2 class="Gestionar3">Si deseas consultar o modificar la empresa haz clic aquí</h2>
    <button class="shadow__btn1" onclick="window.location.href='<?= base_url('/Sabores-Delicias/public/administrador/entorno_consulta_empresa') ?>'">clic aquí</button>
</div>

<?php echo $this->endSection(); ?>