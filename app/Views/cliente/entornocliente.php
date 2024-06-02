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
<div class="menu">
    <ul>
        <li><a href="#inicio">Productos</a></li>
        <li><a href="consumo.html">Consumo</a></li>
        <li><a href="#contacto">Configuración</a></li>
        <li><a href="../index.php">Cerrar sesión</a></li>
    </ul>
</div>
<img src="<?php enlace('/Sabores-Delicias/public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png');?>" alt="" class="logo2">
<img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/paisaje-ilustracion-atardecer-en-el-bosque-montanas_3840x2160_xtrafondos.com.jpg');?>" alt="" class="Bienvenido">
<div class="content8">
    <div class="caja2"></div>
    <h1 id="inicio" class="sitio">Bienvenido a nuestro sitio</h1>
    <div class="caja1">
        <p class="texto_de_bienvenida">Aquí puedes poner contenido relacionado con la página de inicio.</p>
    </div>





    <input type="checkbox" id="cart-toggle">
    <label for="cart-toggle" id="cart-icon">
        <button class="button">
            <svg viewBox="0 0 448 512" class="bell"><path d="M224 0c-17.7 0-32 14.3-32 32V49.9C119.5 61.4 64 124.2 64 200v33.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416H424c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4V200c0-75.8-55.5-138.6-128-150.1V32c0-17.7-14.3-32-32-32zm0 96h8c57.4 0 104 46.6 104 104v33.4c0 47.9 13.9 94.6 39.7 134.6H72.3C98.1 328 112 281.3 112 233.4V200c0-57.4 46.6-104 104-104h8zm64 352H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z"z></path></svg>
        </button>
        
    </label>

    


</div>
<h2 class="Producto">Nuestros producto</h2>
<div class="container8">
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 1">
        <h3>Producto 1</h3>
        <p>Descripción del Refrigerioo 1</p>
        <div class="price">$100</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 2">
        <h3>Producto 2</h3>
        <p>Descripción del Refrigerioo 2</p>
        <div class="price">$200</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 3">
        <h3>Producto 3</h3>
        <p>Descripción del Refrigerioo 3</p>
        <div class="price">$300</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 4">
        <h3>Producto 4</h3>
        <p>Descripción del Refrigerioo 4</p>
        <div class="price">$400</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 1">
        <h3>Producto 1</h3>
        <p>Descripción del Refrigerioo 1</p>
        <div class="price">$100</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 2">
        <h3>Producto 2</h3>
        <p>Descripción del Refrigerioo 2</p>
        <div class="price">$200</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 3">
        <h3>Producto 3</h3>
        <p>Descripción del Refrigerioo 3</p>
        <div class="price">$300</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 4">
        <h3>Producto 4</h3>
        <p>Descripción del Refrigerioo 4</p>
        <div class="price">$400</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 1">
        <h3>Producto 1</h3>
        <p>Descripción del Refrigerioo 1</p>
        <div class="price">$100</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 2">
        <h3>Producto 2</h3>
        <p>Descripción del Refrigerioo 2</p>
        <div class="price">$200</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 3">
        <h3>Producto 3</h3>
        <p>Descripción del Refrigerioo 3</p>
        <div class="price">$300</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 4">
        <h3>Producto 4</h3>
        <p>Descripción del Refrigerioo 4</p>
        <div class="price">$400</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
</div>
<h2 class="Refrigerios">Refrigerio</h2>
<div class="container9">
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 1">
        <h3>Producto 1</h3>
        <p>Descripción del Refrigerioo 1</p>
        <div class="price">$100</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 2">
        <h3>Producto 2</h3>
        <p>Descripción del Refrigerioo 2</p>
        <div class="price">$200</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 3">
        <h3>Producto 3</h3>
        <p>Descripción del Refrigerioo 3</p>
        <div class="price">$300</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 4">
        <h3>Producto 4</h3>
        <p>Descripción del Refrigerioo 4</p>
        <div class="price">$400</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 1">
        <h3>Producto 1</h3>
        <p>Descripción del Refrigerioo 1</p>
        <div class="price">$100</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 2">
        <h3>Producto 2</h3>
        <p>Descripción del Refrigerioo 2</p>
        <div class="price">$200</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 3">
        <h3>Producto 3</h3>
        <p>Descripción del Refrigerioo 3</p>
        <div class="price">$300</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 4">
        <h3>Producto 4</h3>
        <p>Descripción del Refrigerioo 4</p>
        <div class="price">$400</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 1">
        <h3>Producto 1</h3>
        <p>Descripción del Refrigerioo 1</p>
        <div class="price">$100</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 2">
        <h3>Producto 2</h3>
        <p>Descripción del Refrigerioo 2</p>
        <div class="price">$200</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 3">
        <h3>Producto 3</h3>
        <p>Descripción del Refrigerioo 3</p>
        <div class="price">$300</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
    <div class="Refrigerio">
        <img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png');?>" alt="Producto 4">
        <h3>Producto 4</h3>
        <p>Descripción del Refrigerioo 4</p>
        <div class="price">$400</div>
        <a href="#" class="btn">Solicitar</a>
    </div>
</div>
<?php echo $this->endSection(); ?>