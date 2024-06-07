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
    <h2>Añadir producto</h2>
    <h4><?php echo validation_list_errors() . 'Recuerda volver a subir la imagen de tu producto'; ?></h4>
    <form id="registroProductos" action="<?php base_url('admin/productos/anadir'); ?>" method="post" enctype="multipart/form-data">

        <div>
            <label>
                <input type="text" placeholder="Nombre" name="nombre" value="<?php echo set_value('nombre'); ?>">
            </label>

            <br><label>
                <input type="number" placeholder="Precio" required="" min="0" step="0.01" pattern="\d+(\,\d{0,2})?" name="precio" value="<?php echo set_value('precio, 0.00'); ?>">
            </label>

            <div>
                <label for="file-input">
                    <span>Selecciona o arrastra un archivo para la imagen de tu producto (jpg o png)</span>
                </label>
                <input type="file" name="archivo" id="file-input" accept="image/jpg, image/jpeg, image/png" required="" value="<?php echo set_value('archivo'); ?>">
            </div>

            <br><label for="unidad_medida">
                <input type="number" placeholder="Cantidad de medida" required="" min="0" name="cantidad_medida" value="<?php echo set_value('cantidad, 0.00'); ?>">
                <select id="unidad_medida" name="unidad_medida">
                    <option value="">Selecciona una unidad de medida</option>
                    <option value="g">Gramo</option>
                    <option value="kg">Kilogramo</option>
                    <option value="l">Litro</option>
                    <option value="ml">Mililitro</option>
                </select>
            </label>

            <br><label>
                <span>Realiza una descripción de 300 caracteres sobre el producto</span>
                <textarea id="comentarios" name="comentarios" maxlength="299" rows="4" placeholder="Escribe tus comentarios aquí..." value="<?php echo set_value('comentarios'); ?>"></textarea>
            </label>
        </div>
        <div>
            <button type="submit">Añadir Producto</button>
        </div>

        <p>Si deseas consultar o modificar la empresa haz clic aquí<p>
        <button onclick="window.location.href='<?= base_url('admin/productos/consulta') ?>'">clic aquí</button>
</form>
</div>


<?php echo $this->endSection(); ?>