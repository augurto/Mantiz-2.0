
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
<div class="modal fade" id="modal-subir-archivos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>


