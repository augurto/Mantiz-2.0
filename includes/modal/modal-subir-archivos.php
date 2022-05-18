
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
<form action="">

<div class="modal fade" id="modal-subir-archivos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregar entregable</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Descripcion</span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <b>Mostrar contenido?</b>
      <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
        <div id="content" style="display: none;">
          contenido del div escondido<br/>
          contenido del div escondido<br/>
          contenido del div escondido<br/>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Subir Archivo</button>
      </div>
    </div>
  </div>
</div>

</form>