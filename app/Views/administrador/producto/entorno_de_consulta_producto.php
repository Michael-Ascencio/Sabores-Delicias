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

<div class="container_consultarProd">
    <div class="form-container_consultarProd">
        <form action="/Sabores-Delicias/public/admin/productos/consulta" method="get" class="form_consultarProd">
            <span>¡Filtra tu producto por el nombre!</span>
            <input type="hidden" name="id_producto" id="productIdInput">
            <input type="text" onchange="document.getElementById('productIdInput').value = this.value" placeholder="Escribe el nombre de tu producto">
            <button type="submit">Buscar</button>
        </form>
    </div>

    <table class="table_consultarProd">
        <thead>
            <tr>
                <th>ID producto</th>
                <th>Nombre Producto</th>
                <th>Precio unitario</th>
                <th>Imagen</th>
                <th>Unidad de medida</th>
                <th>Estado</th>
                <th>Descripción</th>
                <th>Modificar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto) : ?>
                <tr>
                    <td><?php echo $producto->id_producto; ?></td>
                    <td><?php echo $producto->nombre; ?></td>
                    <td><?php echo $producto->precio; ?></td>
                    <td><img class="responsive-img-producto" src="<?php echo enlace('/Sabores-Delicias/public/images/productos/' . $producto->imagen); ?>"></td>
                    <td><?php echo $producto->unidad_medida; ?></td>
                    <td><?php echo ($producto->estado == 1) ? 'Activo' : 'Inactivo'; ?></td>
                    <td><?php echo $producto->descripcion; ?></td>
                    <td><button onclick="window.location.href='<?= base_url('admin/productos/modificar/' . $producto->id_producto); ?>'">Modificar</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php echo $this->endSection(); ?>
