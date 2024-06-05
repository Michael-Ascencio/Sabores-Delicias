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
<?php echo $this->section('contendo'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Compras</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Informe de ventas</h1>
    <p>Fechas: <?= esc($fechas) ?></p>
    <a href="/contador/descargar_csv?fecha_inicial=<?= esc($fecha_inicial) ?>&fecha_final=<?= esc($fecha_final) ?>" target="_blank">
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
            <?php foreach ($resultados as $resultado): ?>
                <tr>
                    <td><?= esc($resultado['nombre']) ?></td>
                    <td><?= esc($resultado['apellido']) ?></td>
                    <td><?= esc($resultado['total_compras']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

<?php echo $this->endSection(); ?>