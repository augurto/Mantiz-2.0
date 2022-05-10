<div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="table-responsive"> 
                    
                    <!-- Button trigger modal -->
                    <div class="col text-center">
                      <button type="button" class="btn btn-primary" id="boton_proyecto" data-toggle="modal" data-target="#exampleModalCenter">
                      Nuevo Proyecto
                      </button>
                    </div>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <form action="process/form_agregar_proyecto.php">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Agregar Proyecto</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <input type="text" class="form-control" id="nombre_proyecto" aria-describedby="emailHelp" placeholder="Enter email">

                        <div class="input-group mb-3">
                          <label for="inputProyec">Nombre del Proyecto</label>
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Nombre del Proyecto" >
                          <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                          </div>
                        </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                        </form>

                        
                      </div>
                    </div>
                  </div>

                  </div>
          </div>
      </div>
  </div>
