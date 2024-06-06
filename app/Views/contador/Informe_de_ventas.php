<?php
function enlace($url)
{
    $enlace = 'http://' . $_SERVER['HTTP_HOST'] . $url;
    echo $enlace;
}
?>
<!-- Carpeta en la cual se encuentra el layout -->
<?php echo $this->extend('Plantilla/layout_contador'); ?>
<!-- Nombre del contenido en el layout -->
<?php echo $this->section('contenido'); ?>


    <h1>Informe de ventas</h1>
   
    <p>Fechas: <php? esc($fechas) ?></p>
    <a href="descargar_csv?fecha_inicial=<?= esc($fecha_inicial) ?>&fecha_final=<?= esc($fecha_final) ?>" target="_blank">
        <button>Descargar como CSV</button>
    </a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Total Compras</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ventas as $resultado): ?>
                <tr>
                    <td><?= esc($resultado['nombre']) ?></td>
                    <td><?= esc($resultado['apellido']) ?></td>
                    <td><?= esc($resultado['total_compras']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


<?php echo $this->endSection(); ?>