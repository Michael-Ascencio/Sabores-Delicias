<?php
// Conexión a la base de datos
session_start();
require_once __DIR__ . '../../Core/Database.php';

// Controlador para agregar un nuevo lote de productos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $cantidad = $data['cantidad'];
    $lote = $data['lote'];
    $fecha_caducidad = $data['fecha_caducidad'];
    $fk_id_producto = $data['fk_id_producto'];

    $sql = "INSERT INTO inventario (cantidad, lote, fecha_caducidad, fk_id_producto) VALUES ('$cantidad', '$lote', '$fecha_caducidad', '$fk_id_producto')";

    if (mysqli_query($conn, $sql)) {
        echo "Nueva entrada de inventario creada correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Controlador para obtener todos los registros de inventario
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM inventario";
    $result = mysqli_query($conn, $sql);
    $response = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response[] = $row;
        }
        echo json_encode($response);
    } else {
        echo "0 resultados";
    }
}

// Cerrar conexión
mysqli_close($conn);
?>