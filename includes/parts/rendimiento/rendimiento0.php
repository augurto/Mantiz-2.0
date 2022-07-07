 <!--     inicio de contenido  -->
 <?php foreach ($link->query('SELECT * from proyecto ') as $row2){ // aca puedes hacer la consulta e iterarla con each.
                            $contador=1; 
                            $codigo=$row2['codigo'];
                            $nombre_proyecto=$row2['nombre_proyecto'];
                            $extension=$row2['extension'];
                          /*  $cod_proyecto=$row['a_codigo_proyecto']; */ ?> 
                              
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $codigo; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                              <?php echo $extension.' - '.$nombre_proyecto ; ?>
                                            </button>
                                          </h2>
                                          <div id="flush-collapse<?php echo $codigo; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"> 
                                            <?php include 'rendimiento1.php'; ?>

                                            </div>
                                          </div>
                                          </div>
                                    </div>
                                
                          <?php } ?> 
                      
                  
                     <!-- fin de contenido -->