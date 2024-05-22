<?php
include 'db.php';

//Validaciones de atributos
function validarNombre($nombre) {
    return preg_match("/^[a-zA-Z\s]+$/", $nombre);
}

function validarPrecio($precio) {
    return is_numeric($precio) && strpos($precio, '.') !== false;
}

function validarUnidadMedida($unidad) {
    return preg_match("/^[a-zA-Z]+$/", $unidad);
}

function validarImagen($imagen) {
    // Verificar si la imagen es un archivo PNG
    $check = getimagesize($imagen['tmp_name']);
    return $check !== false && $check['mime'] === 'image/png';
}

function registrarProducto($nombre, $precio, $imagen, $unidadMedida) {
    global $conexion; // Permite acceso a la db
    if (!validarNombre($nombre) || !validarPrecio($precio) || !validarUnidadMedida($unidadMedida) || !validarImagen($imagen)) {
        return false; // Verifica que los parámetros ingresados son válidos
    }

    // Guardar la imagen en el servidor
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($imagen["name"]);
    if (!move_uploaded_file($imagen["tmp_name"], $target_file)) {
        return false;
    }

    // "prepare" realizar un nuevo registro y marcadores de posición para MySQL
    $stmt = $conexion->prepare("INSERT INTO productos (nombre, precio, imagen, unidad_medida) VALUES (?, ?, ?, ?)");
    // "bind_param" vincula las variables para pasarlas como marcadores de posición para SQL
    $stmt->bind_param("sdss", $nombre, $precio, $target_file, $unidadMedida);
    // "execute" inserta el nuevo registro
    $stmt->execute();
    // Indica si ocurrió un error en el registro y cuántas filas fueron afectadas
    return $stmt->affected_rows > 0;
}

function mostrarProductos() {
    global $conexion;
    // Ejecuta una consulta SQL para seleccionar todos los productos de la tabla
    $resultado = $conexion->query("SELECT * FROM productos");
    // Utiliza fetch_all() para obtener todas las filas del resultado como un array asociativo y MYSQLI_ASSOC da sentido a la información del array
    $productos = $resultado->fetch_all(MYSQLI_ASSOC);
    // Devuelve el array asociativo que contiene todos los productos de la tabla
    return $productos;
}

function obtenerProductoPorId($id) {
    global $conexion;
    // Prepara una consulta SQL para seleccionar un producto por su ID
    $stmt = $conexion->prepare("SELECT * FROM productos WHERE id = ?");
    // Vincula el parámetro de ID a la consulta
    $stmt->bind_param("i", $id);
    $stmt->execute();
    // Obtiene el resultado
    $resultado = $stmt->get_result();
    // Devuelve la primera fila del resultado como un array asociativo
    return $resultado->fetch_assoc();
}

function actualizarProducto($id, $nombre, $precio, $imagen, $unidadMedida) {
    global $conexion;
    // Verifica si los datos del producto son válidos utilizando las funciones de validación
    if (!validarNombre($nombre) || !validarPrecio($precio) || !validarUnidadMedida($unidadMedida) || !validarImagen($imagen)) {
        // Si los datos no son válidos, devuelve falso
        return false;
    }

    // Guardar la imagen en el servidor
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($imagen["name"]);
    if (!move_uploaded_file($imagen["tmp_name"], $target_file)) {
        return false;
    }

    // Prepara una consulta SQL para actualizar el producto en la tabla por su ID
    $stmt = $conexion->prepare("UPDATE productos SET nombre = ?, precio = ?, imagen = ?, unidad_medida = ? WHERE id = ?");
    // Vincula los parámetros
    $stmt->bind_param("sdssi", $nombre, $precio, $target_file, $unidadMedida, $id);
    $stmt->execute();
    // Verifica si al menos una fila fue afectada por la actualización
    return $stmt->affected_rows > 0;
}

function deshabilitarProducto($id) {
    global $conexion;
    // Prepara una consulta SQL para deshabilitar (marcar como inactivo)
    $stmt = $conexion->prepare("UPDATE productos SET activo = 0 WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->affected_rows > 0;
}

function eliminarProducto($id) {
    global $conexion;
    // Prepara una consultadir para eliminar un producto por su ID
    $stmt = $conexion->prepare("DELETE FROM productos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    // Verifica si al menos una fila fue afectada por la eliminación
    return $stmt->affected_rows > 0;
}

?>