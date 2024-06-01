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
<br><br><br><br><br><br><br><br>
<h2>Subir Archivos</h2>

<form action="<?php base_url('admin/productos/add'); ?>" method="post" enctype="multipart/form-data">

<p>
    <label for="archivo">Selecciona un archivo para la imagen jpg o png</label>
    <input type="file" name="archivo" id="archivo" accept="image/jpg, image/jpeg, image/png, ">
</p>

<p>
    <button type="submit">Subir Archivo</button>
</p>

</form>

<?php echo $this->endSection(); ?>