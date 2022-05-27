<script >
                                      $(document).on("click", "#btnmodal",function () {
                                        
                                              var nombre =$(this).data('nom');
                                              

                                        $("#nombre").val(nombre);
                                        
                          
                                      })

                                    </script>
<!-- Modal -->
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
            <input type="text" aria-label="First name" class="form-control" placeholder="nombre del entregable" id="nombre" name="nombre">
            
        </div>
        <br>
        <div class="input-group">
            
            <span class="input-group-text">Fecha de entrega</span>
            <input type="date" aria-label="Last name" class="form-control" id="fecha" name="fecha">
            <input type="text" aria-label="Last name" class="form-control" id="nombre" name="codigo">
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