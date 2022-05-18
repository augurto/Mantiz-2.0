
<script type="text/javascript">
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>


<!-- Modal -->
<form action="../../includes/process/insert/insertar_entregable.php" >
<div class="modal fade" id="modal-subir-archivos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Agregar Archivos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Descripcion</span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <b>Marca la casilla para agregar link</b>
      <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
      <br>
      <div class="input-group mb-3" id="content" style="display: none;">
        
        <input type="text" class="form-control" placeholder="Pegue aca el link del drive" aria-label="Username" aria-describedby="basic-addon1">
      </div>
       
        <br>
            <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupSelect01">Entregable</label>
              <select class="form-select" id="inputGroupSelect01">
                <option selected>Seleccione...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
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
