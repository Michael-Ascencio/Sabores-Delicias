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

<?php if (session()->has('error')): ?>
    <div class="alert alert-danger">
        <?= session('error') ?>
    </div>
<?php endif; ?>

<h2 class="message1">Ingrese la cédula del cliente que desea modificar</h2>
<div class="searchBox">

  <form id="searchForm" method="get" action="<?= base_url('administrador/entorno_editar_cliente') ?>">

    <input class="searchInput" type="number" id="nitInput" placeholder="Cédula">
    <button class="searchButton" type="submit">
      <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
        <g clip-path="url(#clip0_2_17)">
          <g filter="url(#filter0_d_2_17)">
            <path d="M23.7953 23.9182L19.0585 19.1814M19.0585 19.1814C19.8188 18.4211 20.4219 17.5185 20.8333 16.5251C21.2448 15.5318 21.4566 14.4671 21.4566 13.3919C21.4566 12.3167 21.2448 11.252 20.8333 10.2587C20.4219 9.2653 19.8188 8.36271 19.0585 7.60242C18.2982 6.84214 17.3956 6.23905 16.4022 5.82759C15.4089 5.41612 14.3442 5.20435 13.269 5.20435C12.1938 5.20435 11.1291 5.41612 10.1358 5.82759C9.1424 6.23905 8.23981 6.84214 7.47953 7.60242C5.94407 9.13789 5.08145 11.2204 5.08145 13.3919C5.08145 15.5634 5.94407 17.6459 7.47953 19.1814C9.01499 20.7168 11.0975 21.5794 13.269 21.5794C15.4405 21.5794 17.523 20.7168 19.0585 19.1814Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges"></path>
          </g>
        </g>
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

<script>
  document.getElementById('searchForm').addEventListener('submit', function(e) {
    e.preventDefault();
    var cedula = document.getElementById('nitInput').value;
    if(cedula) {

      var url = "<?= base_url('administrador/entorno_editar_cliente') ?>/" + cedula;

      window.location.href = url;
    }
  });
</script>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Cédula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Contraseña</th>
      <th scope="col">ID_area</th>
      <th scope="col">Teléfono</th>
      <th scope="col">NIT de empresa</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($clientes as $cliente) : ?>
      <tr>
        <div class="Tabla_Productos">
        <td> <?php echo $cliente->cedula; ?> </td>
        <td> <?php echo $cliente->nombre; ?> </td>
        <td> <?php echo $cliente->apellido; ?> </td>
        <td> <?php echo $cliente->correo; ?> </td>
        <td> <?php echo $cliente->contrasena; ?> </td>
        <td> <?php echo $cliente->Area_id_area; ?> </td>
        <td> <?php echo $cliente->telefono; ?> </td>
        <td> <?php echo $cliente->Empresa_nit; ?> </td>
        </div>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php echo $this->endSection(); ?>