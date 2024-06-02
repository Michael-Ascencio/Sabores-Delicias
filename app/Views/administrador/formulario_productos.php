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
<div class="form">
        <h2 class="form-title">Subir Archivos</h2>

        <form action="<?php base_url('admin/productos/add'); ?>" method="post" enctype="multipart/form-data">
            <div class="drop-container">
                <label for="file-input" class="drop-title">Selecciona un archivo para la imagen (jpg o png)</label>
                <input type="file" name="archivo" id="file-input" accept="image/jpg, image/jpeg, image/png">
            </div>

            <div class="form-paragraph">
                <button type="submit" class="footer">Subir Archivo</button>
            </div>
        </form>
    </div>
<?php echo $this->endSection(); ?>