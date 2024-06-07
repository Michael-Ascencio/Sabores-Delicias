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

<h2 class="Gestionar2">Modificar cliente</h2>

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


<form class="form" method="post" action="<?=base_url('administrador/actualizarCliente')?>">
    <p class="title">Actualizar Datos</p>
    <p class="message">Datos del cliente <?php echo $cliente->nombre?> </p>
    <label>
        <input class="input" readonly required name="cedula" value="<?php echo $cliente->cedula?>">
        <span>Cédula</span>
    </label>
    <div class="flex">
        <label>
            <input class="input" type="text" required name="nombre" value="<?php echo $cliente->nombre?>">
            <span>Nombre</span>
        </label>
        <label>
            <input class="input" type="text" required name="apellido" value="<?php echo $cliente->apellido?>">
            <span>Apellido</span>
        </label>
    </div>
    <label>
        <input class="input" type="email" required name="correo" value="<?php echo $cliente->correo?>">
        <span>Correo</span>
    </label>
    <label>
        <input class="input" type="password" required name="contrasena" value="<?php echo $cliente->contrasena?>">
        <span>Contraseña</span>
    </label>
    <label>
        <input class="input" type="number" required name="id_area" value="<?php echo $cliente->Area_id_area?>">
        <span>ID área</span>
    </label>
    <label>
        <input class="input" type="number" required name="telefono" value="<?php echo $cliente->telefono?>">
        <span>Teléfono</span>
    </label>
    <label>
        <input class="input" type="number" required name="nit_empresa" value="<?php echo $cliente->Empresa_nit?>">
        <span>Nit de empresa</span>
    </label>
    <button class="submit" type="submit">Actualizar</button>

</form>

<?php echo $this->endSection(); ?>