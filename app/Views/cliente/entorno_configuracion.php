<?php
function enlace($url)
{
    $enlace = 'http://' . $_SERVER['HTTP_HOST'] . $url;
    echo $enlace;
}
?>
<!-- Carpeta en la cual se encuentra el layout -->
<?php echo $this->extend('Plantilla/layout_cliente'); ?>
<!-- Nombre del contenido en el layout -->
<?php echo $this->section('contenido'); ?>

<div class="imagen12">
<img src="<?php enlace('/Sabores-Delicias/public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png');?>" alt="" class="logo2">
</div>

<form action="<?= base_url('clientes/' . $cliente['cedula']); ?>" class="row g-3" method="post" autocomplete="off">

    <input type="hidden" name="_method" value="put">

    div class="col-md-4">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="clave" name="nombre" value="<?= $cliente['nombre']; ?>" required autofocus>
    </div>

    <div class="col-md-8">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="nombre" name="apellido" value="<?= $cliente['apellido']; ?>" required>
    </div>

    <div class="col-md-6">
        <label for="correo" class="form-label">Correo</label>
        <input type="date" class="form-control" id="correo" name="correo" value="<?= $cliente['correo']; ?>" required>
    </div>

    <div class="col-md-6">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="telefono" class="form-control" id="telefono" name="telefono" value="<?= $cliente['telefono']; ?>" required>
    </div>

    <div class="col-md-6">
        <label for="contrasena" class="form-label">Contrasena</label>
        <input type="contrasena" class="form-control" id="contrasena" name="contrasena" value="<?= $cliente['contrasena']; ?>">
    </div>

    <div class="col-md-6">
        <label for="Area_id_area" class="form-label">Area_id_area</label>
        <input type="Area_id_area" class="form-control" id="Area_id_area" name="Area_id_area" value="<?= $cliente['Area_id_area']; ?>">
    </div>

<?php echo $this->endSection(); ?>