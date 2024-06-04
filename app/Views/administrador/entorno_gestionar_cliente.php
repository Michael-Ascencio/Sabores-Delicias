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

<h2 class="Gestionar2">Gestionar cliente</h2>
<form class="form">
    <p class="title">Registrar cliente</p>
    <p class="message">Ingrese el cliente que desea Registrar  </p>
    <div class="flex">
        <label>
            <input class="input" type="text" required>
            <span>Nombre</span>
        </label>
        <label>
            <input class="input" type="text" required>
            <span>Apellido</span>
        </label>
    </div>
    <label>
        <input class="input" type="number" required>
        <span>Cédula</span>
    </label>
    <label>
        <input class="input" type="email" required>
        <span>Correo</span>
    </label>
    <label>
        <input class="input" type="number"required> 
        <span>Teléfono</span>
    </label>
    <label> <!--Lógica para el área-->
        <input class="input" type="text" required>
        <span>Área</span>
    </label>
    <label> <!--Lógica para la empresa-->
        <input class="input" type="text" required>
        <span>Empresa</span>
    </label>
    <button class="submit">Registrar</button>

</form>
<h2 class="Gestionar3">Si deseas consultar o modificar el cliente haz clic aqui</h2>
<button class="shadow__btn1" href="entorno_de_consulta_tienda.php">clic aqui</button>
<?php echo $this->endSection(); ?>