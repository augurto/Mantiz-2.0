<br>
<div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="table-responsive"> 
                    
                    <!-- Button trigger modal -->
                    

                    <div class="col text-center">
                      <button type="button" class="btn btn-primary" id="boton_proyecto" data-toggle="modal" data-target="#subTipo">
                      Nuevo Sub Tipo
                      </button>
                    </div>

                  <!-- Modal -->
                  <div class="modal fade" id="subTipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <form action="../../includes/process/insert/insertar_proyecto.php">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Agregar Sub tipo Proyecto</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <label for="inputProyec">Nombre del Sub Tipo de Proyecto</label>
                        <div class="input-group mb-3">
                          
                          <br>
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-archive" aria-hidden="true"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Nombre del Proyecto" id="nombre-proyecto" name="nombre-proyecto" >
                          
                        </div>

                      <!--   mostrar el ultimo codigo de todos los proyectos -->
                      
                       

                     
                       <br>
                       
                       <label for="inputProyec">Nombre</label>
                       
                        <div class="input-group mb-3">
                          
                          <br>
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-usd" aria-hidden="true">Nombre</i></span>
                          </div>
                          <input type="number" class="form-control" placeholder="Nombre del sub tipo a agregar" id="presupuesto" name="presupuesto" >
                          
                        </div>

                              <!-- para insertar adelanto -->

                        <!-- <br>
                       <label for="inputProyec">Adelanto</label>
                       
                        <div class="input-group mb-3">
                          
                          <br>
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-usd" aria-hidden="true">S/.</i></span>
                          </div>
                          <input type="number" class="form-control" placeholder="Platita" >
                          
                        </div> -->
                              <br>
                       
                                              


                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                        
                        

                        
                        </form>

                       <!--  <table  class="table table-hover" cellspacing="0" width="100%">
                    
                    <thead>
                    <tr>
                      
                      <th>ID</th>
                      <th>Nombre</th>
                      
                      
                    </tr>
                    </thead>
                    <?php foreach ($link->query('SELECT * from codigo_generado_proyecto') as $row_code){ // aca puedes hacer la consulta e iterarla con each.
                        
                    $nom_entregable=$row_code['varaible'];
                    $id_entr=$row_code['id_cod_gen_pro'];
                        
                        ?> 
                        
                        <tr>    
                        <td><?php echo $estado_ent; ?></td>
                        <td><?php echo $nom_entregable; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                    </table>  -->  
                    <!--     <div class="input-group mb-3">
                          
                          <br>
                          <div class="input-group-prepend">
                        

                          </div>
                          
                          
                        </div>
 -->
                        
                       


                      </div>
                      
                    </div>
                  </div>
                  
                  </div>

                  
          </div>
      </div>
  </div>
