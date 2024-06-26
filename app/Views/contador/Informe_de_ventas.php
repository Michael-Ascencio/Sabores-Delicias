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


    <h1>Informe de Consumos</h1>
    <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/fondocontador.jpg');?>" alt="" class="fondo_contador">
    <php>
    <?php if (session()->getFlashdata('error')): ?>
    <div id="error-message" class="error-message">
        <?= session()->getFlashdata('error') ?>
    </div>
    <?php endif; ?>
    <div class="tabla_resultado_consulta"><table>
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Total Compras</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ventas as $resultado): ?>
                <tr>
                    <td><?= esc($resultado['id_cliente']) ?></td>
                    <td><?= esc($resultado['nombre']) ?></td>
                    <td><?= esc($resultado['apellido']) ?></td>
                    <td><?= esc($resultado['total_compras']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table></div>
    <a href="descargar_csv?fecha_inicial=<?= esc($fecha_inicial) ?>&fecha_final=<?= esc($fecha_final) ?>" target="_blank">
    <button type="button" onclick="window.location.href='informe_de_ventas';">Regresar</button>
        <div class = "boton_descargar" ><button>Descargar como CSV</button></div>
    </a>


<?php echo $this->endSection(); ?>