document.addEventListener('DOMContentLoaded', function () {
    const cartToggle = document.getElementById('cart-toggle');
    const closeCartButton = document.querySelector('.close-cart');

    closeCartButton.addEventListener('click', function () {
        cartToggle.checked = false;
    });
});