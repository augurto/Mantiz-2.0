
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
      <form action="../../includes/process/insert/insertar_operacion.php">
      <div class="modal-body">
        
      <input type="hidden" value="<?php echo $id_usuario; ?>" name="id_usuario">
      <input type="hidden" value="<?php echo $codigo_operacion; ?>" name="cod_operacion">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Ingrese descripcion" required name="descripcion">
        <label for="floatingInput">Descripcion</label>
      </div>
   <!--    <div class="input-group">
        <span class="input-group-text">Fecha Operacion</span>
        
        <input type="date" aria-label="Last name" class="form-control">
      </div>  -->
      <br>  
      <div class="form-floating mb-3">
               <select class="form-control" name="material" id="material" required>
                        <option disabled="disabled" value="" selected>Clic para seleccionar </option>
                        <?php 

                        $sss2=mysqli_query($con,"SELECT * FROM materiales");
                                while($f2=mysqli_fetch_assoc($sss2)){    

                                    echo '<option value="'.$f2['id_mat'].'">'.$f2['nombre_material'].'</option>';

                        }
                        
                        ?>
              </select>
        <label for="floatingInput">Selecciona <?php echo $valor1.': '; ?></label>
      </div>
      <div class="form-floating mb-3">
        <input type="number" class="form-control" id="floatingInput" placeholder="precio o monot de operacion" name="monto" required>
        <label for="floatingInput">Monto :</label>
      </div>
      <div class="form-floating mb-3">
        <input type="number" class="form-control" id="floatingInput" value="1" name="cantidad" required>
        <label for="floatingInput">Cantidad :</label>
      </div>
      <div class="form-floating mb-3">
          <select class="form-select" aria-label="Default select example" name="tipo_operacion">
            <option selected>Clic para seleccionar</option>
            <option value="0">Ingreso</option>
            <option value="1">Egreso</option>
            <option value="2">Otro</option>
          </select>
        <label for="floatingInput">Tipo de Operacion :</label>
      </div>
      <div class="form-floating mb-3">
        <input type="date" class="form-control" id="floatingInput" placeholder="" required name="fecha_operacion">
        <label for="floatingInput">Fecha de Operacion:</label>
      </div>
                        
                        <div class="form-floating">
                          <textarea class="form-control" placeholder="Existe alguna  observacion?" id="floatingTextarea2" style="height: 100px" name="observacion"></textarea>
                          <label for="floatingTextarea2">Observaciones</label>
                        </div> 


      </div>
                         
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
