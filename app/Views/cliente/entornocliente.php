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
<img src="<?php enlace('/Sabores-Delicias/public/images/Fotos/paisaje-ilustracion-atardecer-en-el-bosque-montanas_3840x2160_xtrafondos.com.jpg');?>" alt="" class="Bienvenido">
<div class="content8">
    <div class="caja2"></div>
    <h1 id="inicio" class="sitio"></h1>
    <div class="caja1">
        <p class="texto_de_bienvenida">Bienvenido a nuestro sitio</p>
    </div>





    <input type="checkbox" id="cart-toggle">
    <label for="cart-toggle" id="cart-icon">
        <button class="button">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="10 39 338 512" class="bell">
  <image href="https://img.icons8.com/?size=100&id=59997&format=png&color=FFFFFF" width="448" height="512"/>
</svg>
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