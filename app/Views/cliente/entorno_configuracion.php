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

<h3 class="my-3" id="titulo">Cliente</h3>


            <table class="table table-hover table-bordered my-3" aria-describedby="titulo">
                <thead class="table table-striped">
                    <tr>
                        <th scope="col">Cedula</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Contrasena</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Area_id_area</th>
                        <th scope="col">Empresa_nit</th>
                    </tr>
                </thead>    
                <tbody>
                <?php foreach($clientes as $cliente): ?>
                    <tr>
                        <td><? $cliente['cedula'];?></td>
                        <td><? $cliente['nombre'];?></td>
                        <td><? $cliente['apellido'];?></td>
                        <td><? $cliente['correo'];?></td>
                        <td><? $cliente['contrasena'];?></td>
                        <td><? $cliente['Telefono'];?></td>
                        <td><? $cliente['Area_id_area'];?></td>
                        <td><? $cliente['Empresa_nit'];?></td>                        
                    </tr>
                 <?php endforeach;?>
                </tbody>
            </table>
<?php echo $this->endSection(); ?>