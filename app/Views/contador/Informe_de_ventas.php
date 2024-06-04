<?php
function enlace($url)
{
    $enlace = 'http://' . $_SERVER['HTTP_HOST'] . $url;
    echo $enlace;
}
?>
<!-- Carpeta en la cual se encuentra el layout -->
<?php echo $this->extend('Plantilla/layout_login'); ?>
<!-- Nombre del contenido en el layout -->
<?php echo $this->section('contenido'); ?>
<!-- ingresar aqui contenido -->
<?php echo $this->endSection(); ?>