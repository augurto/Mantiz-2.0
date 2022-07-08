
<!-- inicio de la tabla -->

  <?php foreach ($link->query('SELECT * from users group by username') as $row){ // aca puedes hacer la consulta e iterarla con each.
    $contador=1; 
    $username=$row['username'];
    $id_username=$row['id'];
   /*  $cod_proyecto=$row['a_codigo_proyecto']; */ ?> 
       
            <div class="accordion accordion-flush" id="accordionFlushExamplez">
                <div class="accordion-item" style="border: 1px solid #DDFCCF;">
                  <h2 class="accordion-header" id="flush-headingOne<?php echo $username; ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $username; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $username; ?>">
                      <?php echo $username ; ?>
                    </button>
                  </h2>
                  <div id="flush-collapse<?php echo $username; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne<?php echo $username; ?>" data-bs-parent="#accordionFlushExamplez">
                    <div class="accordion-body">
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
                                                               <!--     inicio de contenido  -->
                                                        <?php foreach ($link->query('SELECT p.codigo,p.nombre_proyecto,e.id as id_entregable ,e.codigo_proyecto, e.nombre, e.usuario_asignado_entregable 
 FROM entregables e INNER JOIN proyecto p on e.codigo_proyecto=p.id
 WHERE usuario_asignado_entregable ="'.$id_username.'" AND codigo_proyecto ="'.$codigo.'" ') as $row3){ 

       $codigo=$row3['codigo'];
       $nombre_entregable=$row3['nombre'];
       $id_entregable=$row3['id_entregable'];  
       $usuario_asignado_entregable=$row3['usuario_asignado_entregable'];                  
                                                        ?> 
                                                              
                                                                    <div class="accordion accordion-flush" id="accordionFlushExample1">
                                                                        <div class="accordion-item" style="border: 1px solid #FF25F8;">
                                                                          <h2 class="accordion-header" id="flush-headingOne">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEntregable<?php echo $nombre_entregable; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                              <?php echo $nombre_entregable ; ?>
                                                                            </button>
                                                                          </h2>
                                                                          <div id="flush-collapseEntregable<?php echo $nombre_entregable; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample1">
                                                                            <div class="accordion-body"> 
                                                                          
                                                                            rendi2
                                                                            </div>
                                                                          </div>
                                                                          </div>
                                                                    </div>
                                                                
                                                          <?php } ?> 
                                                      
                                                  
<!-- fin de contenido -->

                                                              </div>
                                                            </div>
                                                            </div>
                                                      </div>
                                                  
                                            <?php } ?> 
                                        
                                    
                  <!-- fin de contenido -->
                    </div>
                  </div>
                  </div>
            </div>
         
  <?php } ?> 

  