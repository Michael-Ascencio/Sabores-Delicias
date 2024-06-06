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


<div>
    <h2>Modificar producto</h2>
    <h4><?php echo validation_list_errors() . 'Recuerda volver a subir la imagen de tu producto'; ?></h4>
    <form id="registroProductos" action="<?php echo base_url('admin/productos/actualizar'); ?>" method="post" enctype="multipart/form-data">

        <div>
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

            <div>
                <label for="file-input">
                    <span>Selecciona o arrastra un archivo para la imagen de tu producto (jpg o png)</span>
                </label>
                <input type="file" name="archivo" id="file-input" accept="image/jpg, image/jpeg, image/png" required="" value="<?php echo $producto->imagen ?>">
            </div>
            <br><label for="estado">
                <span>Estado del producto</span>
                <select id="estado" name="estado">
                    <option>Seleccione un estado para su producto</option>
                    <option value=1>Activo</option>
                    <option value=0>Inactivo</option>
                </select>
            </label>

            <br><label>
                <span>Realiza una descripción de 300 caracteres sobre el producto</span>
                <textarea id="comentarios" name="comentarios" maxlength="299" rows="4" placeholder="Escribe tus comentarios aquí..."><?php echo $producto->descripcion ?></textarea>
            </label>

        </div>
        <div>
            <button type="submit">Modificar Producto</button>
        </div>
    </form>
</div>
<div>
<h2>Si deseas consultar o modificar otro producto</h2>
<button onclick="window.location.href='<?= base_url('admin/productos/consulta'); ?>'">haz click aquí</button>
</div>
<?php echo $this->endSection(); ?>
