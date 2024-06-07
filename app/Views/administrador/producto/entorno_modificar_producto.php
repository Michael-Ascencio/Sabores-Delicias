<?php
function enlace($url)
{
    $enlace = 'http://' . $_SERVER['HTTP_HOST'] . $url;
    echo $enlace;
}
?>
<!-- Carpeta en la cual se encuentra el layout -->
<?php echo $this->extend('Plantilla/layout_productos_admin'); ?>
<!-- Nombre del contenido en el layout -->
<?php echo $this->section('contenido'); ?>


<div class="container_productoadd">
    <h2>Modificar producto</h2>
    <h4><?php echo validation_list_errors() . ' Recuerda volver a subir la imagen de tu producto'; ?></h4>
    <form id="registroProductos" action="<?php echo base_url('/admin/productos/actualizar'); ?>" method="post" enctype="multipart/form-data" class="form_productoadd">

        <div class="flex_productoadd">
            <label>
            <span>ID del producto</span>
                <input type="text" placeholder="id" name="id" value="<?php echo $producto->id_producto ?>" readonly class="input_productoadd">
            </label>
            <label>
            <span>Nombre del producto</span>
                <input type="text" placeholder="Nombre" name="nombre" value="<?php echo $producto->nombre ?>" class="input_productoadd" required>
            </label>
        </div>

        <label>
        <span>Precio</span>
            <input type="number" placeholder="Precio" required min="0" step="0.01" name="precio" value="<?php echo $producto->precio ?>" class="input_productoadd">
            
        </label>

        <label>
        <span>Unidad de medida</span>
            <input type="text" placeholder="Unidad de medida" name="unidad_medida" value="<?php echo $producto->unidad_medida ?>" readonly class="input_productoadd">
            
        </label>

        <div class="file-input-container">
            <label for="file-input">
                <span>Selecciona o arrastra un archivo para la imagen de tu producto (jpg o png)</span><br><br>
            </label>
            <input type="file" name="archivo" id="file-input" accept="image/jpg, image/jpeg, image/png" required value="<?php echo $producto->imagen ?>" class="input_productoadd">
        </div>
        <span>Estado del producto</span>
        <label for="estado">
            <select id="estado" name="estado" class="input_productoadd">
                <option>Seleccione un estado para su producto</option>
                <option value="1" <?php echo $producto->estado == 1 ? 'selected' : ''; ?>>Activo</option>
                <option value="0" <?php echo $producto->estado == 0 ? 'selected' : ''; ?>>Inactivo</option>
            </select>
        </label>

        <label>
            <span>Realiza una descripción de 300 caracteres sobre el producto</span>
            <textarea id="comentarios" name="comentarios" maxlength="299" rows="4" placeholder="Escribe tus comentarios aquí..." class="input01_productoadd"><?php echo $producto->descripcion ?></textarea>
        </label>

        <button type="submit" class="fancy_productoadd">
            <span class="top-key_productoadd"></span>
            <span class="text_productoadd">Modificar Producto</span>
            <span class="bottom-key-1_productoadd"></span>
            <span class="bottom-key-2_productoadd"></span>
        </button>
        <br><br><p>Si deseas consultar o modificar el producto haz clic aquí</p>
        <button type="button" class="fancy_productoadd" onclick="window.location.href='<?= base_url('admin/productos/consulta') ?>'">
            <span class="top-key_productoadd"></span>
            <span class="text_productoadd">Clic Aquí</span>
            <span class="bottom-key-1_productoadd"></span>
            <span class="bottom-key-2_productoadd"></span>
        </button>
    </form>
    </form>
</div>
<?php echo $this->endSection(); ?>
