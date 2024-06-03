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

<title><?php echo esc($titulo); ?> </title>


<?php echo $this->endSection(); ?>