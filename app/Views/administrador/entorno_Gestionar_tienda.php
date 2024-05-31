<!-- Carpeta en la cual se encuentra el layout -->
<?php echo $this->extend('Plantilla/layout_admin'); ?>
<!-- Nombre del contenido en el layout -->
<?php echo $this->section('contenido'); ?>

<h2 class="Gestionar2">Gestionar tienda</h2>
<form class="form">
    <p class="title">Registrar tienda</p>
    <p class="message">Ingrese la tienda que desea Registrar  </p>
        <div class="flex">
        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>Nombre</span>
        </label>

        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>Dirreción</span>
        </label>
    </div>  
            
    <label>
        <input class="input" type="text" placeholder="" required="">
        <span>Ubicación</span>
    </label> 
        
    <label>
        <input class="input" type="email" placeholder="" required="">
        <span>correo</span>
    </label>
    <label>
        <input class="input" type="number" placeholder="" required="">
        <span>Teléfono</span>
    </label>
    <button class="submit">Registrar</button>

</form>
<h2 class="Gestionar3">Si deseas consultar o modificar la tienda haz clic aqui</h2>
<button class="shadow__btn1" href="entorno_de_consulta_tienda.php">clic aqui</button>
<?php echo $this->endSection(); ?>