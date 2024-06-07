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
    <h2>Añadir producto</h2>
    <h4><?php echo validation_list_errors() . ' Recuerda volver a subir la imagen de tu producto'; ?></h4>
    <form id="registroProductos" action="<?php echo base_url('admin/productos'); ?>" method="post" enctype="multipart/form-data" class="form_productoadd">

        <div class="flex_productoadd">
            <label>
                <span>Nombre Producto</span>
                <input type="text" placeholder="Nombre" name="nombre" value="<?php echo set_value('nombre'); ?>" class="input_productoadd" required>
            </label>

            <label>
            <span>Precio del Producto</span>
                <input type="number" placeholder="Precio" required min="0" step="0.01" pattern="\d+(\,\d{0,2})?" name="precio" value="<?php echo set_value('precio, 0.00'); ?>" class="input_productoadd">
            </label>
        </div>

        <div class="file-input-container">
            <label for="file-input">
                <span>Selecciona o arrastra un archivo para la imagen de tu producto (jpg o png)</span><br><br>
            </label>
            <input type="file" name="archivo" id="file-input" accept="image/jpg, image/jpeg, image/png" required value="<?php echo set_value('archivo'); ?>" class="input_productoadd">
        </div>
        <span>Escribe y selecciona una cantidad de medida</span>
        <label for="unidad_medida" class="flex_productoadd">
            <input type="number" placeholder="Cantidad de medida" required min="0" name="cantidad_medida" value="<?php echo set_value('cantidad, 0.00'); ?>" class="input_productoadd">
            <select id="unidad_medida" name="unidad_medida" class="input_productoadd">
                <option value="">Selecciona una unidad de medida</option>
                <option value="g">Gramo</option>
                <option value="kg">Kilogramo</option>
                <option value="l">Litro</option>
                <option value="ml">Mililitro</option>
            </select>
        </label>

        <label>
            <span>Realiza una descripción de 300 caracteres sobre el producto</span>
            <textarea id="comentarios" name="comentarios" maxlength="299" rows="4" placeholder="Escribe tus comentarios aquí..." class="input01_productoadd"><?php echo set_value('comentarios'); ?></textarea>
        </label>

        <button type="submit" class="fancy_productoadd">
            <span class="top-key_productoadd"></span>
            <span class="text_productoadd">Añadir Producto</span>
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
</div>


<?php echo $this->endSection(); ?>