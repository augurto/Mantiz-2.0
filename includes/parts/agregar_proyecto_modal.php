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
                          <label for=""></label>
                          <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
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

                        <form class="row g-3">
                          <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                          </div>
                          <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4">
                          </div>
                          <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                          </div>
                          <div class="col-12">
                            <label for="inputAddress2" class="form-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                          </div>
                          <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                          </div>
                          <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                              <option selected>Choose...</option>
                              <option>...</option>
                            </select>
                          </div>
                          <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                          </div>
                          <div class="col-12">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck">
                              <label class="form-check-label" for="gridCheck">
                                Check me out
                              </label>
                            </div>
                          </div>
                          <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  </div>
          </div>
      </div>
  </div>
