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
<br><br><br><br>
<h2><?php echo esc($mensaje); ?></h2>
<br><br>
<button class="shadow__btn" onclick="window.location.href='/Sabores-Delicias/public/admin/entorno';"> Volver a la vista anterior </button>
<?php echo $this->endSection(); ?>