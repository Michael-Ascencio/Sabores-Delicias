<?php
function enlace($url)
{
    $enlace = 'http://' . $_SERVER['HTTP_HOST'] . $url;
    echo $enlace;
}
?>
<!-- Carpeta en la cual se encuentra el layout -->
<?php echo $this->extend('Plantilla/layout_cliente'); ?>
<!-- Nombre del contenido en el layout -->
<?php echo $this->section('contenido'); ?>

<div class="imagen12">
<img src="<?php enlace('/Sabores-Delicias/public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png');?>" alt="" class="logo2">
</div>
<img src=""<?php enlace('/Sabores-Delicias/public/images/Fotos/paisaje-ilustracion-atardecer-en-el-bosque-montanas_3840x2160_xtrafondos.com.jpg');?>" alt="" class="Bienvenido">
<div class="content8">
    <div class="caja2"></div>
    <h1 id="inicio" class="sitio1">Bienvenido a nuestro sitio</h1>
    <div class="caja4"></div>

    <table>
        <thead>
            <tr>

                <th>Fecha</th>
                <th>Total</th>
                <th>Acciones</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>

                <td>2024-01-01</td>
                <td>$100.00</td>
                <td><button>Ver</button></td>
            </tr>
            <tr>

                <td>2024-02-15</td>
                <td>$150.00</td>
                <td><button>Ver</button></td>
            </tr>
            <tr>

                <td>2024-03-10</td>
                <td>$200.00</td>
                <td><button>Ver</button></td>
            </tr>
            <tr>

                <td>2024-04-05</td>
                <td>$250.00</td>
                <td><button>Ver</button></td>
            </tr>
        </tbody>
    </table>
   
</div>
<?php echo $this->endSection(); ?>