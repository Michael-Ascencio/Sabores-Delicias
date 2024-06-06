<?php
function enlace($url)
{
    $enlace = 'http://' . $_SERVER['HTTP_HOST'] . $url;
    echo $enlace;
}
?>

<!-- Carpeta en la cual se encuentra el layout -->
<?= $this->extend('Plantilla/layout_login'); ?>
<!-- Nombre del contenido en el layout -->
<?= $this->section('contenido'); ?>

<div class="Faro_fondo">
    <div class="administrador1"></div>
    <img src="<?php enlace('/Sabores-Delicias/public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png'); ?>" alt="" class="logo">
    <div class="login-container-admin">
        <h2>Iniciar Sesión (Administrador)</h2>

        <?php if (session()->has('mensaje')) : ?>
            <div class="alert alert-danger" role="alert">
                <?= session('mensaje'); ?>
            </div>
        <?php endif; ?>

        <form id="loginFormAdmin" action="<?= base_url('loginadmin'); ?>" method="POST">
            <input type="text" name="username" placeholder="Cedula" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
            <button type="button" onclick="window.location.href='index.php';">Regresar</button>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>