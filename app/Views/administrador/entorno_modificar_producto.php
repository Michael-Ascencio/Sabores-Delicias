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
    <h2 class="form-title">Modificar producto</h2>
    <p class="message">Datos del producto" <?php echo $producto->nombre?> "</p>
    <h4 class="form-title"><?php echo validation_list_errors().'Recuerda volver a subir la imagen de tu producto';?></h4>
    <form id="registroProductos" action="<?php base_url('admin/productos/actualizar/'); ?>" method="post" enctype="multipart/form-data">
        
        <div class="form-group">
            <label>
                <input type="text" placeholder="Nombre" name="nombre" value="<?php echo set_value('nombre'); ?>">
            </label>

            <br><label>
                <input type="number" placeholder="Precio" required="" min="0" step="0.01" pattern="\d+(\,\d{0,2})?" name="precio" value="<?php echo set_value('precio, 0.00'); ?>">
            </label>

            <div class="drop-container">
                <label for="file-input" class="drop-title">
                    <span >Selecciona o arrastra un archivo para la imagen de tu producto (jpg o png)</span>
                </label>
                <input type="file" name="archivo" id="file-input" accept="image/jpg, image/jpeg, image/png" required="" value="<?php echo set_value('archivo'); ?>">
            </div>

            <br><label for="unidad_medida" class="form-group">
                <input type="number" placeholder="Cantidad de medida" required="" min="0" name= "cantidad_medida" value="<?php echo set_value('cantidad, 0.00'); ?>">
                <select id="unidad_medida" name="unidad_medida">
                    <option value="">Selecciona una unidad de medida</option>
                    <option value="g">Gramo</option>
                    <option value="kg">Kilogramo</option>
                    <option value="l">Litro</option>
                    <option value="ml">Mililitro</option>
                </select>
            </label>

            <br><label for="inventario" class="form-group">
                <span>Inventarios</span>
                <select id="inventario" name="inventario">
                    <option>Seleccione un inventario</option>
                    <?php /* foreach ($inventarios as $inventario) :  */ ?>
                    <option value="<?php /* echo $inventario->id_inventario; */ ?>"><?php /* echo $inventario->id_inventario */; ?></option>
                    <?php /* endforeach;  */ ?>
                    <option value="1">inventario 1</option>
                </select>
            </label>

            <br><label class="form-group">
                <span>Realiza una descripción de 300 caracteres sobre el producto</span>
                <textarea id="comentarios" name="comentarios" maxlength="299" rows="4" placeholder="Escribe tus comentarios aquí..." value="<?php echo set_value('comentarios'); ?>"></textarea>
            </label>

        </div>
        <div class="form-paragraph">
            <button type="submit">Añadir Producto</button>
        </div>
    </form>
</div>

<form class="form">
    <p class="title">Modificar tienda</p>
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