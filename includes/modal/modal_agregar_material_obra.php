
<!-- Modal -->
<div class="modal fade" id="agregar-materiales-obra" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Operacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      <input type="hidden" value="<?php echo $id_usuario; ?>">
      <input type="hidden" value="<?php echo $codigo_operacion; ?>">
      <div class="input-group">
        <span class="input-group-text">Descripcion</span>
        <input type="text" aria-label="First name" class="form-control">
        <input type="date" aria-label="Last name" class="form-control">
      </div> 
      <br>  
      <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">Seleccionar <?php echo $valor1; ?></label>
              <select class="form-control" name="usuario_asignado" id="usuario_asignado" required="">
                        <option disabled="disabled" value="" selected>Clic para ver usuarios</option>
                        <?php 

                        $sss2=mysqli_query($con,"SELECT * FROM materiales");
                                while($f2=mysqli_fetch_assoc($sss2)){    

                                    echo '<option value="'.$f2['id_mat'].'">'.$f2['nombre_material'].'</option>';

                        }
                        
                        ?>
              </select>
                       
            </div>
      <select class="form-select" aria-label="Default select example">
        <option selected>Tipo de Operacion</option>
        <option value="1">Ingreso</option>
        <option value="2">Egreso</option>
        <option value="3">Otro</option>
      </select>
      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>