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
  const totalAmountElement = document.querySelector('.total-amount');

  let totalAmount = 0;

  const products = document.querySelectorAll('.add-to-cart');

  products.forEach(product => {
    product.addEventListener('click', function () {
      const productName = this.getAttribute('data-product');
      const productImage = this.getAttribute('data-image');
      const productDescription = this.getAttribute('data-description');
      const productPrice = parseFloat(this.getAttribute('data-price'));
      addToCart(productName, productImage, productDescription, productPrice);
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

  function addToCart(productName, productImage, productDescription, productPrice) {
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
      updateTotal(-productPrice);
    });
    cartItem.appendChild(removeButton);

    cartItemsContainer.appendChild(cartItem);

    updateTotal(productPrice);
  }

  function updateTotal(amount) {
    totalAmount += amount;
    totalAmountElement.textContent = `Total: $${totalAmount.toFixed(2)}`;
  }
});
    </script>



<h1 class="Refrigerios1">Refrigerios</h1>
<div class="products">
    <?php 
    $count = 0;
    foreach ($productos as $producto) : 
        if ($count % 4 == 0) {
            if ($count > 0) {
                echo '</div>'; // Cierra el div.row anterior si no es el primer producto
            }
            echo '<div class="row">'; // Abre un nuevo div.row
        }
    ?>
        <div class="product">
            <img class="responsive-img-producto" src="<?php echo enlace("/Sabores-Delicias/public/images/productos/".$producto->imagen); ?>" alt="<?php echo $producto->nombre; ?>">
            <h3><?php echo $producto->nombre; ?></h3>
            <p>Precio: <?php echo $producto->precio; ?></p>
            <p>Descripción: <?php echo $producto->descripcion; ?></p>
            <button class="add-to-cart" data-product="<?php echo $producto->nombre; ?>" data-description="<?php echo $producto->descripcion; ?>" data-image="<?php echo enlace("/Sabores-Delicias/public/images/productos/".$producto->imagen); ?>" >Agregar al carrito</button>
        </div>
    <?php 
        $count++;
    endforeach; 
    if ($count > 0) {
        echo '</div>'; // Cierra el último div.row
    }
    ?>
</div>








<?php echo $this->endSection(); ?>

