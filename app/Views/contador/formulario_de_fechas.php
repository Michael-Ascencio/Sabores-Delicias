<!-- Carpeta en la cual se encuentra el layout -->
<?= $this->extend('Plantilla/layout_contador'); ?>

<!-- Nombre del contenido en el layout -->
<?= $this->section('contenido'); ?>


    <h1 class="formulario_fechas">Seleccionar Fechas</h1>
    <div class ="formulario_ingreso_fechas"><form action="<?= base_url('contador/consultar_informe') ?>" method="post">
        <label for="fecha_inicial">Fecha Inicial:</label>
        <input type="date" id="fecha_inicial" name="fecha_inicial" required>
        <br>
        <label for="fecha_final">Fecha Final:</label>
        <input type="date" id="fecha_final" name="fecha_final" required>
        <br>
        <div class= "boton_consulta" ><button type="submit">Consultar</button></div>
        
    </form>
</div>

<?= $this->endSection(); ?>