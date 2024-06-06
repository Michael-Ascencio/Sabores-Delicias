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

<title><?php echo esc($titulo); ?> </title>

<div class="imagen12">
<img src="<?php enlace('/Sabores-Delicias/public/images/logos/36ed206f-c52a-467b-84eb-4f164b3f303a-removebg-preview.png');?>" alt="" class="logo2">
</div>

<?php if (session()->has('error')): ?>
    <div class="alert alert-danger">
        <?= session('error') ?>
    </div>
<?php endif; ?>      
        <defs>
          <filter id="filter0_d_2_17" x="-0.418549" y="3.70435" width="29.7139" height="29.7139" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
            <feOffset dy="4"></feOffset>
            <feGaussianBlur stdDeviation="2"></feGaussianBlur>
            <feComposite in2="hardAlpha" operator="out"></feComposite>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_17"></feBlend>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17" result="shape"></feBlend>
          </filter>
          <clipPath id="clip0_2_17">
            <rect width="28.0702" height="28.0702" fill="white" transform="translate(0.403503 0.526367)"></rect>
          </clipPath>
        </defs>
      </svg>
    </button>
  </form>
</div>
<h3 class="my-3" id="titulo">Inventario</h3>
        <table class="table table-hover table-bordered my-3" aria-describedby="titulo">
          <div class="botoncentrar">
          <a href="entorno_registro_inventario" class="btn btn-success">Agregar</a>
          </div>
    <table class="table-dark">
        <thead>
            <tr>
            <th scope="col">id_inventario</th>
            <th scope="col">id_tienda</th>
            <th scope="col">id_producto</th>
            <th scope="col">cantidad</th>
            <th scope="col">lote</th>
            <th scope="col">fecha_caducidad</th>
            <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
    <?php foreach ($inventarios as $inventario) : ?>
      
        <tr>
            <div class="Tabla_Inventario">
            <td> <?php echo $inventario->id_inventario; ?> </td>
            <td> <?php echo $inventario->lote; ?> </td>
            <td> <?php echo $inventario->fecha_caducidad; ?> </td>
            <td> <?php echo $inventario->cantidad; ?> </td>
            <td> <?php echo $inventario->lote; ?> </td>
            <td> <?php echo $inventario->fecha_caducidad; ?> </td>           
            <td>
                <a href="edita.html" class="btn btn-warning btn-sm me-2">Editar</a>
                <a href="edita.html" class="btn btn-warning btn-sm me-2">Eliminar</a>
            </td>
          </div>
        </tr>
    <?php endforeach; ?>
        </tbody>
    </table>
<?php echo $this->endSection(); ?>
                        


