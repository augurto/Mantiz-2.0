 <!--     inicio de contenido  -->
                                                        <?php foreach ($link->query('SELECT p.codigo,p.nombre_proyecto,e.codigo_proyecto, e.nombre, e.usuario_asignado_entregable 
 FROM entregables e INNER JOIN proyecto p on e.codigo_proyecto=p.id
 WHERE usuario_asignado_entregable ="'.$id_username.'" ') as $row3){ 
       $codigo=$row3['codigo'];
       $nombre_entregable=$row3['nombre'];
       $usuario_asignado_entregable=$row3['usuario_asignado_entregable'];                  
                                                        ?> 
                                                              
                                                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                                                        <div class="accordion-item">
                                                                          <h2 class="accordion-header" id="flush-headingOne">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $nombre_entregable; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                              <?php echo $nombre_entregable ; ?>
                                                                            </button>
                                                                          </h2>
                                                                          <div id="flush-collapse<?php echo $nombre_entregable; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                            <div class="accordion-body"> 
                                                                          
                                                                            
                                                                            </div>
                                                                          </div>
                                                                          </div>
                                                                    </div>
                                                                
                                                          <?php } ?> 
                                                      
                                                  contenido pendiente con includes
                                                    <!-- fin de contenido -->