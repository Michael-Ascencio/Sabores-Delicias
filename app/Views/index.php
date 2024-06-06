<?php
function enlace($url)
{
    $enlace = 'http://' . $_SERVER['HTTP_HOST'] . $url;
    echo $enlace;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php enlace('/Sabores-Delicias/public/css/estilos.css');?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
</head>
<body>
    <div class="fondo">
        <img src="<?php enlace('/Sabores-Delicias/public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png');?>" alt="" class="logo">

        <div class="cuadrado">
            <div class="container">
                <div class="box">
                    <div class="background-image" style="background-image: url('<?php enlace('/Sabores-Delicias/public/images/logos/5939837.png');?>');"></div>
                    <h2 class="texto">Cliente</h2>
                    <button type="button" class="btn-regresar" onclick="window.location.href='logincliente';">Ingresar</button>
                </div>
                <div class="box">
                    <div class="background-image" style="background-image: url('<?php enlace('/Sabores-Delicias/public/images/logos/5939837 (3).png');?>');"></div>
                    <h2 class="texto">Administradores</h2>
                    <button type="button" class="btn-regresar" onclick="window.location.href='loginadmin';">Ingresar</button>
                </div>
                <div class="box">
                    <div class="background-image" style="background-image: url('<?php enlace('/Sabores-Delicias/public/images/logos/5939837 (4).png');?>');"></div>
                    <h2 class="texto">Empleados</h2>
                    <button type="button" class="btn-regresar" onclick="window.location.href='loginempleado';">Ingresar</button>
                </div>
                <div class="box">
                    <div class="background-image" style="background-image: url('<?php enlace('/Sabores-Delicias/public/images/logos/5939837 (2).png');?>');"></div>
                    <h2 class="texto">Contador</h2>
                    <button type="button" class="btn-regresar" onclick="window.location.href='logincontador';">Ingresar</button>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>
