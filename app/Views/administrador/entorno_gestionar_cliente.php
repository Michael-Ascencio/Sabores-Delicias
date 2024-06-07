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

<h2 class="Gestionar2">Gestionar cliente</h2>

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

<form class="form" method="post" action="<?=base_url('administrador/entorno_gestionar_cliente')?>">
    <p class="title">Registrar cliente</p>
    <p class="message">Ingrese el cliente que desea Registrar  </p>
    <label>
        <input class="input" type="number" required name="cedula">
        <span>Cédula</span>
    </label>
    <div class="flex">
        <label>
            <input class="input" type="text" required name="nombre">
            <span>Nombre</span>
        </label>
        <label>
            <input class="input" type="text" required name="apellido">
            <span>Apellido</span>
        </label>
    </div>
    <label>
        <input class="input" type="email" required name="correo">
        <span>Correo</span>
    </label>
    <label>
        <input class="input" type="password"required name="contrasena"> 
        <span>Contraseña</span>
    </label>
    <label> <span class="formulario1">Área</span><!--Lógica para el área-->
        <select name="Area_id_area" class="input" >
            <option value="">Seleccione</option>
            <?php foreach ($areas as $area) : ?> 
                <option value="<?php echo $area->id_area?>">
                    <?php echo $area->nombre;?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>
    <label>
        <input class="input" type="number"required name="telefono"> 
        <span>Teléfono</span>
    </label>
    <label><span class="formulario1">Empresa</span> <!--Lógica para la empresa-->
        <select name="Empresa_nit" class="input" >
                <option value="">Seleccione</option>
                <?php foreach ($empresas as $empresa) : ?> 
                    <option value="<?php echo $empresa->nit?>">
                        <?php echo $empresa->nombre;?>
                    </option>
                <?php endforeach; ?>
        </select>
    </label>
    <button class="submit">Registrar</button>

</form>
<div class="consultar-modificar">
    <h2 class="Gestionar3">Si deseas consultar o modificar clientes haz clic aquí</h2>
    <button class="shadow__btn1" onclick="window.location.href='<?= base_url('administrador/entorno_consulta_cliente') ?>'">clic aquí</button>
</div>

<?php echo $this->endSection(); ?>