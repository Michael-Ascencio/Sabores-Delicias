
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


    <img src="<?php enlace('/Sabores-Delicias/public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png');?>" alt="" class="logo66">

    <img src="<?php enlace('/Sabores-Delicias/public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png');?>" alt="" class="logo66">
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
            <h2 class="carrit">Carrito de Compras</h2>
            <h2 class="carrit">Carrito de Compras</h2>
            <div id="cart-items"></div>
            <button id="checkout">Proceder al pago</button>
        </div>
    </div>
  <style>
 
</style>
  </style>
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
                <img class="responsive-img-producto<?php echo ($producto->estado == 0) ? ' product-disabled' : ''; ?>" src="<?php echo enlace("/Sabores-Delicias/public/images/productos/".$producto->imagen); ?>" alt="<?php echo $producto->nombre; ?>">
                <h3><?php echo $producto->nombre; ?></h3>
                <?php if ($producto->estado == 1) : ?>
                    <p>Precio: <?php echo $producto->precio; ?></p>
                    <p>Descripción: <?php echo $producto->descripcion; ?></p>
                    
                    <form class="add-to-cart-form">
                        <input type="hidden" name="producto" value="<?php echo $producto->nombre; ?>">
                        <input type="hidden" name="descripcion" value="<?php echo $producto->descripcion; ?>">
                        <input type="hidden" name="imagen" value="<?php echo enlace("/Sabores-Delicias/public/images/productos/".$producto->imagen); ?>">
                        <input type="hidden" name="precio" value="<?php echo $producto->precio; ?>"> <!-- Añadir el precio aquí -->
                        <button type="submit">Agregar al Carrito</button>
                    </form>
                <?php else : ?>
                    <p >Producto agotado</p>
                <?php endif; ?>
            </div>
        <?php 
            $count++;
        endforeach; 
        if ($count > 0) {
            echo '</div>'; // Cierra el último div.row
        }
        ?>
    </div>
</div>
<style>
    .product {
    display: flex;
    flex-direction: column; /* Apila los elementos verticalmente */
    align-items: center; /* Centra los elementos horizontalmente */
    text-align: center; /* Centra el texto */
    margin-bottom: 40px; /* Espacio entre productos */
}

.product img {
    width: 200px; /* Ancho de la imagen */
    height: auto; /* Altura automática para mantener la proporción */
    border-radius: 10px; /* Bordes redondeados */
    margin-bottom: 10px; /* Espacio inferior */
}

.product h3 {
    margin: 0;
}

.product p {
    margin: 0;
    color: #666; /* Color del texto */
}
 .modal {
    display: none; /* Por defecto oculto */
    position: fixed;
    z-index: 9;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4); /* Fondo semitransparente */
}

/* Estilos para el contenido del modal */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto; /* Centrado vertical y algo más arriba */
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 600px; /* Ancho máximo */
    border-radius: 10px; /* Bordes redondeados */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
}

/* Estilos para el botón de cerrar */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
}

/* Estilos para el título del carrito */
.carrit {
    text-align: center;
    margin-bottom: 20px;
}

/* Estilos para cada elemento del carrito */
.cart-item {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    border-bottom: 1px solid #eee; /* Línea divisoria */
    padding-bottom: 10px; /* Espacio inferior */
}

.cart-item img {
    width: 80px; /* Ancho de la imagen */
    height: auto;
    border-radius: 5px; /* Bordes redondeados */
    margin-right: 20px; /* Espacio a la derecha */
}

/* Estilos para la información del producto */
.cart-item .info {
    flex: 1; /* Que ocupe el espacio restante */
}

.cart-item h4 {
    margin-bottom: 5px; /* Espacio inferior */
}

.cart-item p {
    margin: 0;
    color: #666; /* Color del texto */
}

/* Estilos para el campo de cantidad */
.cart-item input[type="number"] {
    width: 50px; /* Ancho del campo */
    padding: 5px;
    border: 1px solid #ccc; /* Borde del campo */
    border-radius: 3px; /* Bordes redondeados */
    text-align: center; /* Texto centrado */
}

/* Estilos para el botón de eliminar */
.cart-item button {
    background-color: #ff5858; /* Color de fondo */
    color: #fff; /* Color del texto */
    border: none;
    padding: 5px 10px; /* Espaciado interno */
    border-radius: 5px; /* Bordes redondeados */
    cursor: pointer; /* Cursor apuntador */
    transition: background-color 0.3s ease; /* Transición suave */
}

.cart-item button:hover {
    background-color: #ff3333; /* Cambio de color al pasar el ratón */
}

/* Estilos para el botón de proceder al pago */
#checkout {
    background-color: #4CAF50; /* Color de fondo */
    color: white; /* Color del texto */
    padding: 10px 20px; /* Espaciado interno */
    border: none;
    border-radius: 5px; /* Bordes redondeados */
    cursor: pointer; /* Cursor apuntador */
    transition: background-color 0.3s ease; /* Transición suave */
    margin-top: 20px; /* Espacio superior */
}

#checkout:hover {
    background-color: #45a049; /* Cambio de color al pasar el ratón */
}

</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carrito = new Map(); // Objeto para almacenar los productos en el carrito
        const cartItemsContainer = document.getElementById('cart-items');

        // Evento para mostrar y ocultar el modal del carrito
        const cartIcon = document.getElementById('cart-icon');
        const cartModal = document.getElementById('cart-modal');
        const closeCartButton = cartModal.querySelector('.close');

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

        // Evento para agregar productos al carrito
        const addtoCartForms = document.querySelectorAll('.add-to-cart-form');
        addtoCartForms.forEach(form => {
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(this);
                const productoSeleccionado = formData.get('producto');
                const descripcion = formData.get('descripcion');
                const imagen = formData.get('imagen');
                const precioUnitario = formData.get('precio'); // Obtener el precio unitario del formulario

                const cantidad = 1
                ; // Por defecto, agregamos 1 al carrito

// Lógica para agregar el producto al carrito
if (!carrito.has(productoSeleccionado)) {
    // Si el producto no está en el carrito, lo agregamos
    carrito.set(productoSeleccionado, { cantidad: cantidad, descripcion: descripcion, imagen: imagen, precioUnitario: precioUnitario });
    console.log('Producto ${productoSeleccionado} agregado al carrito con una cantidad de ${cantidad}');
    addToCart(productoSeleccionado, cantidad, descripcion, imagen, precioUnitario); // Pasar el precioUnitario a addToCart
} else {
    // Si el producto ya está en el carrito, mostramos un mensaje al usuario
    console.log('El producto ${productoSeleccionado} ya está en el carrito.');
}
});
});

// Función para agregar elementos al carrito
function addToCart(producto, cantidad, descripcion, imagen, precioUnitario) {
    const cartItem = document.createElement('div');
    cartItem.classList.add('cart-item');

    const img = document.createElement('img');
    img.src = imagen;
    img.classList.add('product-image');
    cartItem.appendChild(img);

    const info = document.createElement('div');
    info.classList.add('info');

    const name = document.createElement('h4');
    name.textContent = producto;
    info.appendChild(name);

    const descriptionTitle = document.createElement('h5');
    descriptionTitle.textContent = 'Descripción:';
    descriptionTitle.style.color = '#000'; // Establecer color de texto negro
    info.appendChild(descriptionTitle);

    const description = document.createElement('p');
    description.textContent = descripcion;
    description.style.color = '#000'; // Establecer color de texto negro
    info.appendChild(description);

    const priceTitle = document.createElement('h5');
    priceTitle.textContent = 'Precio unitario:';
    priceTitle.style.color = '#000'; // Establecer color de texto negro
    info.appendChild(priceTitle);

    const price = document.createElement('p');
    price.textContent = precioUnitario;
    price.style.color = '#000'; // Establecer color de texto negro
    info.appendChild(price);

    cartItem.appendChild(info);

    // Campo de entrada para seleccionar la cantidad
    const quantityInput = document.createElement('input');
    quantityInput.type = 'number';
    quantityInput.value = cantidad;
    quantityInput.min = 1;
    quantityInput.addEventListener('input', function() {
        updateQuantity(producto, this.value);
    });
cartItem.appendChild(quantityInput);

const removeButton = document.createElement('button');
removeButton.textContent = 'Eliminar';
removeButton.classList.add('remove-from-cart');
removeButton.addEventListener('click', function () {
cartItem.remove();
carrito.delete(producto);
});
cartItem.appendChild(removeButton);

cartItemsContainer.appendChild(cartItem);
}

// Función para actualizar la cantidad en el carrito
function updateQuantity(producto, cantidad) {
carrito.set(producto, { cantidad: parseInt(cantidad), ...carrito.get(producto) });
}
});

</script>

<?php echo $this->endSection(); ?>