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

<h2 class="Gestionar2">Cargar clientes</h2>

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

<form class="form" method="post" action="<?=base_url('administrador/procesar_subida_usuarios')?>" enctype="multipart/form-data">

    <p class="title">Subir clientes</p>
    <p class="message">Carga el archivo CSV con los datos de los clientes.</p>
    <label>
        <input class="input" type="file" required name="archivo">
        <span>Archivo</span>
    </label>

    <button class="submit">Registrar</button>

</form>

<?php echo $this->endSection(); ?>