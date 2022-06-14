
<!-- Modal -->
<?php foreach ($link->query('SELECT * from entregables where codigo_proyecto="'.$id_p.'"') as $rowpp){
$id_pp=$rowpp['id_p'];
$nombrepp=$rowpp['nombre'];
}
?>
<form action="../../includes/process/insert/insertar_entregable.php" >
<div class="modal fade" id="modal-entregable" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Entregables</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="input-group">
            <span class="input-group-text"><i class="fa fa-plus" aria-hidden="true"></i></span>
            <input type="text" aria-label="First name" class="form-control" placeholder="nombre del entregable" id="nombre" name="nombre" required>
            <input type="hidden" value="<?php echo $_GET["id_p"]; ?>" id="codigo" name="codigo" >
            <input type="hidden" value="<?php echo $usuario; ?>" id="usuario" name="usuario" >
            <input type="text" value="<?php echo $nombrepp; ?>" id="nombre_proyecto" name="nombre_proyecto" >
            
        </div>
        <br>
        <div class="input-group">
            
            <span class="input-group-text">Fecha de entrega</span>
            <input type="date" aria-label="Last name" class="form-control" id="fecha" name="fecha" required>
            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar Entregable</button>
      </div>
    </div>
  </div>
</div>

</form>