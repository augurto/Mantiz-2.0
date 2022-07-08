 <!--     inicio de contenido  -->
 <?php foreach ($link->query('SELECT a.id_seg,a.a_codigo_proyecto,a.a_id , a.documento, a.a_estado_seguimiento FROM archivos a ') as $row4){ 

        $id_seg_archivos=$row4['id_seg'];
        $a_codigo_proyecto_archivos=$row4['a_codigo_proyecto'];
        $a_id_archivos=$row4['a_id'];
        $a_estado_seguimiento_archivos=$row4['a_estado_seguimiento'];
        $nombre_documento=$row4['documento'];
        $espacio=trim($nombre_documento);
                       
?> 
                                                              
                                                                    <div class="accordion accordion-flush" id="accordionFlushExample2">
                                                                        <div class="accordion-item" style="border: 1px solid #FF252C;">
                                                                          <h2 class="accordion-header" id="flush-headingOne">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseArchivo<?php echo $a_id_archivos; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                              <?php echo $nombre_documento ; ?>
                                                                            </button>
                                                                          </h2>
                                                                          <div id="flush-collapseArchivo<?php echo 'parte4'.$a_id_archivos; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample2">
                                                                            <div class="accordion-body"> 
                                                                          
                                                                            <?php echo $a_estado_seguimiento_archivos ; ?>
                                                                           
                                                                            </div>
                                                                          </div>
                                                                          </div>
                                                                    </div>
                                                                
                                                          <?php } ?> 
                                                      
                                                  
 <!-- fin de contenido -->