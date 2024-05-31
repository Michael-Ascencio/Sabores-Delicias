<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../../public/css/estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="Faro_fondo">
    <img src="../../../public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png" alt=""class="logo">
    <div class="login-container-contador">
        <h2>Iniciar Sesión (Contador)</h2>
        <form id="loginFormContador" action="../../controllers/contador/ContadorController.php" method="POST">
            <input type="text" name="username" placeholder="Nombre de Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
            <button type="button" onclick="window.location.href='../index.php';">Regresar</button>
        </form>
    </div>
</body>
</html>