<!DOCTYPE html>
<html lang="en">
<head>
    <script src="java.js"></script>
    <link rel="stylesheet" href="../../../public/css/estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administradores</title>
</head>
<body class="body">
    <div class="Faro_fondo">
    <div class="administrador1"></div>
    <img src="../../../public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png" alt="" class="logo">
    <div class="login-container-admin">
        <h2>Iniciar Sesión (Administrador)</h2>
        <?php 
            session_start(); 
            if (isset($_SESSION['error'])): 
        ?>
            <div style="color: white; background-color: red; padding: 10px; margin-bottom: 10px;">
                <?= $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>
        <form id="loginFormAdmin" action="../../controllers/AdminController.php" method="POST">
            <input type="text" name="username" placeholder="Cedula" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
            <button type="button" onclick="window.location.href='../index.html';">Regresar</button>
        </form>
    </div>
</div>     
</body>
</html>
