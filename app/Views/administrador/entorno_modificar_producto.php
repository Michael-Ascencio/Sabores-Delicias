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
    <h4 class="form-title"><?php echo validation_list_errors() . 'Recuerda volver a subir la imagen de tu producto'; ?></h4>
    <form id="registroProductos" action="<?php echo base_url('admin/productos/actualizar'); ?>" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label>
                <input type="text" placeholder="id" name="id" value="<?php echo $producto->id_producto ?>" readonly>
            </label>
            <label>
                <input type="text" placeholder="Nombre" name="nombre" value="<?php echo $producto->nombre ?>">
            </label>

            <br><label>
                <input type="floatval" placeholder="Precio" required="" min="0" step="0.01" name="precio" value="<?php echo $producto->precio ?>">
            </label>

            <label>
                <input type="text" placeholder="Unidad de medida" name="unidad_medida" value="<?php echo $producto->unidad_medida?>" readonly>
            </label>

            <div class="drop-container">
                <label for="file-input" class="drop-title">
                    <span>Selecciona o arrastra un archivo para la imagen de tu producto (jpg o png)</span>
                </label>
                <input type="file" name="archivo" id="file-input" accept="image/jpg, image/jpeg, image/png" required="" value="<?php echo $producto->imagen ?>">
            </div>
            <br><label for="estado" class="form-group">
                <span>Estado del producto</span>
                <select id="estado" name="estado">
                    <option>Seleccione un estado para su producto</option>
                    <option value=1>Activo</option>
                    <option value=0>Inactivo</option>
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
                    <option value="2">inventario 2</option>
                </select>
            </label>

            <br><label class="form-group">
                <span>Realiza una descripción de 300 caracteres sobre el producto</span>
                <textarea id="comentarios" name="comentarios" maxlength="299" rows="4" placeholder="Escribe tus comentarios aquí..."><?php echo $producto->descripcion ?></textarea>
            </label>

        </div>
        <div class="form-paragraph">
            <button type="submit">Modificar Producto</button>
        </div>
    </form>
</div>
<br><br><br><br><br><br><br>
<!-- <h2 class="Gestionar3">Si deseas consultar o modificar otro producto haz clic aqui</h2>
<button class="shadow__btn1" href="<?php base_url('admin/productos/consulta'); ?>">clic aqui</button> -->
<?php echo $this->endSection(); ?>