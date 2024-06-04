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

<h2 class="Gestionar2">Gestionar tienda</h2>
<form class="form">
    <p class="title">Modificar tienda</p>
    <p class="message">Datos de la tienda" <?php echo $tienda->nombre?> "</p>
    <p class="message">La postal de la tienda es: " <?php echo $tienda->cod_postal?> "</p>
        <div class="flex">
        <label>
            <input class="input" type="text" placeholder="" required="" value="<?php echo $tienda->nombre?>">
            <span>Nombre</span>
        </label>

        <label>
            <input class="input" type="text" placeholder="" required="" value="<?php echo $tienda->dirección?>">
            <span>Dirreción</span>
        </label>
    </div>  
            
    <label>
        <input class="input" type="text" placeholder="" required="" value="<?php echo $tienda->ubicacion?>">
        <span>Ubicación</span>
    </label> 
        
    <label>
        <input class="input" type="email" placeholder="" required="" value="<?php echo $tienda->correo?>">
        <span>correo</span>
    </label>
    <label>
        <input class="input" type="number" placeholder="" required="" value="<?php echo $tienda->teléfono?>">
        <span>Teléfono</span>
    </label>
    <button class="submit">Modificar</button>

</form>
<h2 class="Gestionar3">Si deseas consultar o modificar otra tienda haz clic aqui</h2>
<button class="shadow__btn1" href="entorno_de_consulta_tienda.php">clic aqui</button>
<?php echo $this->endSection(); ?>