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
<div class="menu">
    <ul>
        <li><a href="entorno">Productos</a></li>
        <li><a href="consumo">Consumo</a></li>
        <li><a href="configuracion">Configuración</a></li>
        <li><a href="">Cerrar sesión</a></li>
    </ul>
</div>

<?php echo $this->endSection(); ?>