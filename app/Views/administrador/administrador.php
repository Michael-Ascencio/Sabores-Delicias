<?php
function enlace($url)
{
    $enlace = 'http://' . $_SERVER['HTTP_HOST'] . $url;
    echo $enlace;
}
?>

<!-- Carpeta en la cual se encuentra el layout -->
<?php echo $this->extend('Plantilla/layout_login'); ?>
<!-- Nombre del contenido en el layout -->
<?php echo $this->section('contenido');?>


<div class="Faro_fondo">
    <div class="administrador1"></div>
    <img src="<?php enlace('/Sabores-Delicias/public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png');?>" alt="" class="logo">
    <div class="login-container-admin">
        <h2>Iniciar Sesión (Administrador)</h2>
        <form id="loginFormAdmin" action="../../controllers/admin/AdminController.php" method="POST">
            <input type="text" name="username" placeholder="Cedula" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
            <button type="button" onclick="window.location.href='<?php enlace('/public');?>">Regresar</button>
        </form>
    </div>
</div>

<?php echo $this->endSection(); ?>