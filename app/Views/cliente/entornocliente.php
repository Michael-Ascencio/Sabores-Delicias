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
    
    <div id="cart-icon">
        <img src="<?php enlace('/Sabores-Delicias/public/images/logos/carrito-de-compras.png');?>" alt="" class="carritodecompras">
    </div>
    <div id="cart-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Carrito de Compras</h2>
            <div id="cart-items"></div>
          <p></p>
            <button id="checkout">Proceder al pago</button>
        </div>
    </div>
   
    <tbody>
  
      
      <tr>
        <div class="Carrito de compras">
        <td> </td>
     
        </div>
      </tr>

  </tbody>
  

    <script>
              document.addEventListener('DOMContentLoaded', function () {
            const cartIcon = document.getElementById('cart-icon');
            const cartModal = document.getElementById('cart-modal');
            const closeCartButton = cartModal.querySelector('.close');
            const cartItemsContainer = document.getElementById('cart-items');

            const products = document.querySelectorAll('.add-to-cart');

            products.forEach(product => {
                product.addEventListener('click', function () {
                    const productName = this.getAttribute('data-product');
                    const productImage = this.getAttribute('data-image');
                    const productDescription = this.getAttribute('data-description');
                    addToCart(productName, productImage, productDescription);
                });
            });

            cartIcon.addEventListener('click', function () {
                cartModal.style.display = 'block';
            });

            closeCartButton.addEventListener('click', function () {
                cartModal.style.display = 'none';
            });

            window.addEventListener('click', function (event) {
                if (event.target == cartModal) {
                    cartModal.style.display = 'none';
                }
            });

            function addToCart(productName, productImage, productDescription) {
                const cartItem = document.createElement('div');
                cartItem.classList.add('cart-item');

                const img = document.createElement('img');
                img.src = productImage;
                cartItem.appendChild(img);

                const info = document.createElement('div');
                info.classList.add('info');

                const name = document.createElement('h4');
                name.textContent = productName;
                info.appendChild(name);

                const description = document.createElement('p');
                description.textContent = productDescription;
                info.appendChild(description);

                cartItem.appendChild(info);

                const removeButton = document.createElement('button');
                removeButton.textContent = 'X';
                removeButton.classList.add('remove-from-cart');
                removeButton.addEventListener('click', function () {
                    cartItem.remove();
                });
                cartItem.appendChild(removeButton);

                cartItemsContainer.appendChild(cartItem);
            }
        });
    </script>



<h1 class="Refrigerios1">Refrigerios</h1>

<div class="products">
    <div class="row">
        <div class="product">
            <img src="/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png" alt="Producto 1">
            <h3>Producto 1</h3>
            <button class="add-to-cart" data-product="Producto 1">Agregar al carrito</button>
        </div>
        <div class="product">
            <img src="/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png" alt="Producto 2">
            <h3>Producto 2</h3>
            <button class="add-to-cart" data-product="Producto 2">Agregar al carrito</button>
        </div>
        <div class="product">
            <img src="/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png" alt="Producto 3">
            <h3>Producto 3</h3>
            <button class="add-to-cart" data-product="Producto 3">Agregar al carrito</button>
        </div>
        <div class="product">
        <img src="/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png" alt="Producto 3">
            <h3>Producto 4</h3>
            <button class="add-to-cart" data-product="Producto 4" data-description="Descripción del Producto 4" data-image="producto4.jpg">Agregar al carrito</button>
        </div>
    </div>
    <div class="row">
        <div class="product">
        <img src="/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png" alt="Producto 3">
            <h3>Producto 5</h3>
            <button class="add-to-cart" data-product="Producto 5">Agregar al carrito</button>
        </div>
        <div class="product">
        <img src="/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png" alt="Producto 3">
            <h3>Producto 6</h3>
            <button class="add-to-cart" data-product="Producto 6">Agregar al carrito</button>
        </div>
        <div class="product">
        <img src="/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png" alt="Producto 3">
            <h3>Producto 7</h3>
            <button class="add-to-cart" data-product="Producto 7">Agregar al carrito</button>
        </div>
        <div class="product">
        <img src="/Sabores-Delicias/public/images/Fotos/pngwing.com (12).png" alt="Producto 3">
            <h3>Producto 8</h3>
            <button class="add-to-cart" data-product="Producto 8">Agregar al carrito</button>
        </div>
    </div>
</div>









<?php echo $this->endSection(); ?>

