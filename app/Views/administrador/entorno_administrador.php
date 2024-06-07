<?php
function enlace($url)
{
    $enlace = 'http://' . $_SERVER['HTTP_HOST'] . $url;
    echo $enlace;
}
?>
<!-- Carpeta en la cual se encuentra el layout -->
<?php echo $this->extend('Plantilla/layout_admin'); ?>
<!-- Nombre del contenido en el layout -->
<?php echo $this->section('contenido'); ?>

<div class="notification">
  <div class="notiglow"></div>
  <div class="notiborderglow"></div>
  <div class="notititle">¡Bienvenido, administrador! <?php echo esc($Nombre_admin); ?></div>
  <div class="notibody">Gracias por ser parte de nuestro equipo. Como administrador, tienes un papel fundamental en el funcionamiento y la gestión de nuestra plataforma.</div>
</div>
   <h2 class="Gestionar1">Gestionar</h2>
  <div class="gallery-container">
    <div class="gallery-item">
        <img src="<?php enlace('/Sabores-Delicias/public/images/logos/undraw_Segment_analysis_re_ocsl-removebg-preview.png');?>" alt="Imagen 1" class="Galeria1">
        <div class="gallery-content">
            <h2 class="gallery-title">Gestionar tienda</h2>
            <p class="gallery-text">Descripción </p>
            <button class="shadow__btn" onclick="window.location.href='entorno_Gestionar_tienda.php';"> Entrar </button>
        </div>
    </div>
    <div class="gallery-item">
        <img src="<?php enlace('/Sabores-Delicias/public/images/logos/undraw_Updated_resume_re_7r9j-removebg-preview.png');?>" alt="Imagen 2" class="Galeria1">
        <div class="gallery-content">
            <h2 class="gallery-title">Gestionar empleado</h2>
            <p class="gallery-text">Descripción </p>
            <button class="shadow__btn">Entrar</button>
        </div>
    </div>
    <div class="gallery-item">
        <img src="<?php enlace('/Sabores-Delicias/public/images/logos/undraw_product_iteration_kjok-removebg-preview.png');?>" alt="Imagen 3">
        <div class="gallery-content">
            <h2 class="gallery-title">Gestionar productos</h2>
            <p class="gallery-text">Descripción </p>
            <button class="shadow__btn" onclick="window.location.href='productos'">Entrar</button>
        </div>
    </div>
    <div class="gallery-item">
        <img src="<?php enlace('/Sabores-Delicias/public/images/logos/undraw_undraw_undraw_undraw_businessman_e7v0_qrld_-1-_hvmv__1__ik9c-removebg-preview.png');?>" alt="Imagen 4">
        <div class="gallery-content">
            <h2 class="gallery-title">Gestionar proveedores</h2>
            <p class="gallery-text">Descripción</p>
            <button class="shadow__btn">Entrar</button>
        </div>
    </div>
    <div class="gallery-item">
        <img src="<?php enlace('/Sabores-Delicias/public/images/logos/undraw_term_sheet_re_ju7s-removebg-preview.png');?>" alt="Imagen 5">
        <div class="gallery-content">
            <h2 class="gallery-title">Gestionar inventario</h2>
            <p class="gallery-text">Descripción</p>
            <button class="shadow__btn"onclick="window.location.href='entorno_inventario';">Entrar</button>
        </div>
    </div>
    <div class="gallery-item">
        <img src="<?php enlace('/Sabores-Delicias/public/images/logos/undraw_Customer_survey_re_v9cj-removebg-preview.png');?>" alt="Imagen 6">
        <div class="gallery-content">
            <h2 class="gallery-title">Gestionar clientes</h2>
            <p class="gallery-text">Descripción</p>   
            <button class="shadow__btn"onclick="window.location.href='<?= base_url('administrador/entorno_gestionar_cliente') ?>';">Entrar</button>
        </div>
    </div>

    <div class="gallery-item">
        <img src="<?php enlace('/Sabores-Delicias/public/images/logos/undraw_Customer_survey_re_v9cj-removebg-preview.png');?>" alt="Imagen 6">
        <div class="gallery-content">
            <h2 class="gallery-title">Gestionar empresa</h2>
            <p class="gallery-text">Descripción</p>
            <button class="shadow__btn"onclick="window.location.href='<?= base_url('administrador/entorno_gestionar_empresa') ?>';">Entrar</button>
        </div>
    </div>
</div>
</aside>

<?php echo $this->endSection(); ?>