 <!--     inicio de contenido  -->
 <?php foreach ($link->query('SELECT a.id_seg, a.documento, a.a_estado_seguimiento FROM archivos a ') as $row3){ 

       $codigo=$row3['id_seg'];
       $nombre_documento=$row3['documento'];
       $espacio=trim($nombre_documento);
                       
                                                        ?> 
                                                              
                                                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                                                        <div class="accordion-item" style="border: 1px solid #FF252C;">
                                                                          <h2 class="accordion-header" id="flush-headingOne">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $espacio; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                              <?php echo $nombre_documento ; ?>
                                                                            </button>
                                                                          </h2>
                                                                          <div id="flush-collapse<?php echo $espacio; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                                            <div class="accordion-body"> 
                                                                          
                                                                            <?php include 'rendimiento2.php'; ?>
                                                                            </div>
                                                                          </div>
                                                                          </div>
                                                                    </div>
                                                                
                                                          <?php } ?> 
                                                      
                                                  
                                                    <!-- fin de contenido -->