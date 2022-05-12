
        <!--Ejemplo tabla con DataTables-->
        <?php require_once ('./config/conexion_tabla.php') ?>
        <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        
                        <thead>
                                <tr>
                                    <th>Id</th>
                                    
                                    <th>Proyecto</th>
                                    
                                    <th>Presupuesto</th>
                                    <th>Fecha inicio</th>
                                    <th>Fecha Fin</th>
                                    <th>Estado</th>
                                    <th>Accion</th>
                                    <th>Accion</th>
                                    
                                </tr>
                                </thead>
                        <?php 
                        $count=1;
                        foreach ($link->query('SELECT * from proyecto order by codigo desc') as $row){ // aca se hace la consulta e iterarla con each. ?> 
                        <?php
                        
                        $id=$row['id'];
                        $codigo=$row['codigo'];
                        $extencion=$row['extencion'];
                        $nombre_proyecto=$row['nombre_proyecto'];
                        $presupuesto=$row['presupuesto'];
                        $usuario=$row['usuario_maker'];
                        $fecha_ini=$row['fecha_ini'];
                        $fecha_fin=$row['fecha_fin'];

                        $estado=$row['estado'];
                         if ($estado==0) { ?>
                             
                             <tr style="background-color: #F0FFFF !important;">

                             <?php  }elseif ($estado==1) { ?>
                             <tr style="background-color: #F0FFF0 !important;">

                             <?php  }elseif ($estado==2) { ?>
                             <tr style="background-color: #FFE4E1 !important;">
                       
                             <?php } else{?>
                             <tr style="background-color: #FDF5E6 !important;">
                             <?php }?>   
                             <td><?php echo $count++; ?></td>
                           
                             <td><a href="../../entregables.php?id_p=<?php echo $id_proyecto; ?>"><?php echo $codigo.'-'.$extencion.'-'.$nombre_proyecto; ?></a></td>
                             
                             
                             <td><span id="firstname<?php echo $presupuesto; ?>"><?php echo $presupuesto; ?></span></td>
                             <td><span id="lastname<?php echo $fecha_ini; ?>"><?php echo $fecha_ini; ?></span></td>
                             <td><span id="address<?php echo $fecha_fin; ?>"><?php echo $fecha_fin; ?></span></td>
                             <!-- <td><?php echo $fecha_ini ?></td>
                             <td><?php echo $fecha_fin ?></td> -->
                            <td><?php if ($estado==0) {
                                # code...
                                echo 'Inactivo';
                            } elseif ($estado==1) {
                                # code...
                                echo 'Terminado';
                            } elseif ($estado==2) {
                                # code...
                                echo 'Activo';
                            }?></td>
                            <td>
                            <!-- Button trigger modal -->
                              <button type="button" id="btnmodal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-cod="Ego">
                                editt
                              </button>
                              <script>
                                    $(document).on("click","#btnmodal",function(){
                                      var codigo =$(this).data('cod');
                                      $("#codigo").val(codigo);
                                    })
                                  </script>
                              <!-- Modal -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                          <input type="text" id="codigo" name="">
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </td>
                            <td>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar-proyecto" >
                            <i class="fa fa-trash"></i>
                            </button>

                            <button type="button" id="btneditar" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#editProyecto" data-cod="ego">
                            <i class="fa fa-edit"></i>
                            </button>
                            
                            
                              <!-- <a href="../../includes/process/eliminar/eliminar_proyecto.php?id_p=<?php echo $id_proyecto; ?>" class="btn btn-danger"  title='Borrar proyecto desde a'><i class="fa fa-trash"></i></a> -->
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                        </table>
                </table>          
                    </div>
                </div>
        </div>  
    </div>    