<?php
function enlace($url)
{
    $enlace = 'http://' . $_SERVER['HTTP_HOST'] . $url;
    echo $enlace;
}
?>

<!-- Carpeta en la cual se encuentra el layout -->
<?= $this->extend('Plantilla/layout_login'); ?>
<!-- Nombre del contenido en el layout -->
<?= $this->section('contenido'); ?>

<div class="imagen_inventario">
    <img src="<?= enlace('/Sabores-Delicias/public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png');?>" alt="" class="inventario">
</div>

<h3 class="my-3">Editar Inventario</h3>



    <form id="registroProductos" action=method ="post" enctype="multipart/form-data">

    </form>
<button class="btn btn-success" onclick="window.location.href='entorno_inventario';" >Regresar</button>

<?php echo $this->endSection(); ?>