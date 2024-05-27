<?php
class InventoryModel {
    private $conn;

    // Constructor para establecer la conexión a la base de datos
    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Método para validar los datos de entrada
    private function validateInput($cantidad, $lote, $fecha_caducidad, $fk_id_producto) {
        // Validar cantidad
        if (!is_numeric($cantidad) || $cantidad <= 0) {
            return "La cantidad debe ser un número mayor que cero.";
        }

        // Validar lote
        if (!preg_match('/^[A-Za-z0-9\s-]+$/', $lote)) {
            return "El formato del lote es inválido.";
        }

        // Validar fecha de caducidad
        if (!preg_match('/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-](20\d{2})$/', $fecha_caducidad)) {
            return "El formato de la fecha de caducidad es inválido.";
        }

        // Validar existencia del ID de producto
        $sql = "SELECT COUNT(*) as count FROM productos WHERE id_producto = '$fk_id_producto'";
        $result = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($row['count'] == 0) {
            return "El ID de producto especificado no existe.";
        }

        return true; // Los datos de entrada son válidos
    }

    // Método para agregar una nueva entrada de inventario
    public function addInventory($cantidad, $lote, $fecha_caducidad, $fk_id_producto) {
        // Validar los datos de entrada
        $validationResult = $this->validateInput($cantidad, $lote, $fecha_caducidad, $fk_id_producto);
        if ($validationResult !== true) {
            return $validationResult; // Retorna el mensaje de error de validación
        }
    
        // Intentar insertar la nueva entrada de inventario
        $sql = "INSERT INTO inventario (cantidad, lote, fecha_caducidad, fk_id_producto) VALUES ('$cantidad', '$lote', '$fecha_caducidad', '$fk_id_producto')";
        if (mysqli_query($this->conn, $sql)) {
            return true; // La inserción fue exitosa
        } else {
            return "Error al agregar la nueva entrada de inventario: " . mysqli_error($this->conn); // Retorna el mensaje de error de MySQL
        }
    }

    // Método para quitar productos del inventario
    public function removeInventory($id_inventario, $cantidad) {
        // Verificar la cantidad actual en el inventario
        $sql = "SELECT cantidad FROM inventario WHERE id_inventario = $id_inventario";
        $result = mysqli_query($this->conn, $sql);
        if ($row = mysqli_fetch_assoc($result)) {
            $cantidad_actual = $row['cantidad'];
            if ($cantidad > $cantidad_actual) {
                return "No es posible realizar la operación: la cantidad a retirar excede la cantidad disponible.";
            }
        } else {
            return "El ID de inventario especificado no existe.";
        }

        // Intentar actualizar la cantidad en el inventario
        $sql = "UPDATE inventario SET cantidad = cantidad - $cantidad WHERE id_inventario = $id_inventario";
        if (mysqli_query($this->conn, $sql)) {
            return true; // La actualización fue exitosa
        } else {
            return "Error al quitar productos del inventario: " . mysqli_error($this->conn); // Retorna el mensaje de error de MySQL
        }
    }

    // Método para obtener todos los registros de inventario
    public function getInventory() {
        $sql = "SELECT * FROM inventario";
        $result = mysqli_query($this->conn, $sql);
        $response = array();

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $response[] = $row;
            }
            return $response;
        } else {
            return array();
        }
    }

    // Método para consultar lotes con filtros
    public function searchInventory($filters) {
        $sql = "SELECT * FROM inventario WHERE 1=1";

        if (isset($filters['cantidad'])) {
            $cantidad = $filters['cantidad'];
            $sql .= " AND cantidad = '$cantidad'";
        }
        if (isset($filters['lote'])) {
            $lote = $filters['lote'];
            $sql .= " AND lote LIKE '%$lote%'";
        }
        if (isset($filters['fecha_caducidad'])) {
            $fecha_caducidad = $filters['fecha_caducidad'];
            $sql .= " AND fecha_caducidad = '$fecha_caducidad'";
        }
        if (isset($filters['fk_id_producto'])) {
            $fk_id_producto = $filters['fk_id_producto'];
            $sql .= " AND fk_id_producto = '$fk_id_producto'";
        }

        $result = mysqli_query($this->conn, $sql);
        $response = array();

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $response[] = $row;
            }
        }
        
        return $response;
    }
}
?>