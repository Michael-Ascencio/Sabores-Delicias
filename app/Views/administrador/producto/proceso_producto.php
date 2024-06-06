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
<button onclick="window.location.href='<?= redirect()->back()->withInput() ?>'">Volver a la vista anterior</button>
<h2><?php echo esc($mensaje); ?></h2>
<?php echo $this->endSection(); ?>