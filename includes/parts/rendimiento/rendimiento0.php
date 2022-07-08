 <!--     inicio de contenido  -->
 <?php foreach ($link->query('SELECT p.codigo,p.extencion,p.nombre_proyecto,e.codigo_proyecto, e.nombre, e.usuario_asignado_entregable 
 FROM entregables e INNER JOIN proyecto p on e.codigo_proyecto=p.id
 WHERE usuario_asignado_entregable ="'.$id_username.'" GROUP by p.nombre_proyecto') as $row2){ // aca puedes hacer la consulta e iterarla con each.
                            
                            $codigo=$row2['codigo'];
                            $nombre_proyecto=$row2['nombre_proyecto'];
                            $extension=$row2['extencion'];
                          /*  $cod_proyecto=$row['a_codigo_proyecto']; */ ?> 
                              
                                    <div class="accordion accordion-flush" id="accordionFlushExample0">
                                        <div class="accordion-item" style="border: 1px solid #DDFCCF;">
                                          <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseProyecto<?php echo $codigo; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                              <?php echo $extension.' - '.$nombre_proyecto ; ?>
                                            </button>
                                          </h2>
                                          <div id="flush-collapseProyecto<?php echo $codigo; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample0">
                                            <div class="accordion-body"> 
                                            <?php include 'rendimiento1.php'; ?>

                                            </div>
                                          </div>
                                          </div>
                                    </div>
                                
                          <?php } ?> 
                      
                  
<!-- fin de contenido -->