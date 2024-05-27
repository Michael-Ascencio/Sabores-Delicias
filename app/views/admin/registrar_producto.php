<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Producto</title>
</head>
<body>
    <h1>Registrar Nuevo Producto</h1>
    <form action="registrar_producto.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" required><br><br>
        
        <button type="submit">Registrar</button>
    </form>
</body>
</html>
