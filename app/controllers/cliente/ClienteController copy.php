<?php

session_start();
require_once __DIR__ . '../../../Core/Database.php';

class ClienteController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $cedula = $_POST['username'];
            $password = $_POST['password'];

            // Obtener la instancia de la base de datos
            $pdo = Database::getInstance();

            try {
                // Preparar la consulta
                $stmt = $pdo->prepare('SELECT contraseña, Cargo_id_cargo FROM Cliente WHERE Cedula = :cedula');
                $stmt->bindParam(':cedula', $cedula, PDO::PARAM_STR);
                $stmt->execute();
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($user) {
                    if ($password === $user['contraseña']) {
                        if ($user['Cargo_id_cargo'] == 1 || $user['Cargo_id_cargo'] == 2) {
                            // Redirigir al entorno de administrador
                            header('Location: ../../views/admin/entorno_administrador.php');
                            exit();
                        } else {
                            $_SESSION['error'] = 'El cargo no es el indicado para ingresar por este medio.';
                        }
                    } else {
                        $_SESSION['error'] = 'Contraseña incorrecta.';
                    }
                } else {
                    $_SESSION['error'] = 'Usuario inexistente.';
                }
            } catch (PDOException $e) {
                $_SESSION['error'] = 'Error de conexión: ' . $e->getMessage();
            }

            // Redirigir de vuelta al formulario de inicio de sesión
            header('Location: ../../views/admin/administrador.php');
            exit();
        } else {
            $_SESSION['error'] = 'Método no permitido.';
            header('Location: ../../views/admin/administrador.php');
            exit();
        }
    }
}

// Llamar a la función de login cuando el formulario se envía
if (basename($_SERVER['PHP_SELF']) == 'AdminController.php') {
    $controller = new AdminController();
    $controller->login();
}
