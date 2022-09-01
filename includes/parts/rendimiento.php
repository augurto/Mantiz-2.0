
<!-- inicio de la tabla -->

  <?php foreach ($link->query('SELECT * from users group by username') as $row){ // aca puedes hacer la consulta e iterarla con each.
    $contador=1; 
    $username=$row['username'];
    $id_username=$row['id'];
   /*  $cod_proyecto=$row['a_codigo_proyecto']; */ ?> 
       
            <div class="accordion accordion-flush" id="accordionFlushExamplez" >
                <div class="accordion-item" style="border-top: 1px solid #DDFCCF;border-bottom: 1px solid #DDFCCF;">
                  <h2 class="accordion-header" id="flush-headingOne<?php echo $username; ?>" style="width:20% ;">
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
                                                          <div class="accordion-item" style="border-bottom-right-radius: 40px 40px;border-top-right-radius: 40px 40px;border-top: 1px solid #331fed;border-right: 1px solid #331fed;border-bottom: 1px solid #331fed;">
                                                            <h2 class="accordion-header" id="flush-headingOne">
                                                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseProyecto<?php echo $codigo; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                                                <?php echo $extension.' - '.$nombre_proyecto ; ?>
                                                              </button>
                                                            </h2>
                                                            <div id="flush-collapseProyecto<?php echo $codigo; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample0">
                                                              <div class="accordion-body"> 
                                                               <!--     inicio de contenido  -->
                                                              <?php foreach ($link->query('SELECT p.codigo,p.nombre_proyecto,e.id as id_entregable ,
                                                              e.codigo_proyecto, e.nombre, e.usuario_asignado_entregable 
                                                              FROM entregables e INNER JOIN proyecto p on e.codigo_proyecto=p.id
                                                              WHERE usuario_asignado_entregable ="'.$id_username.'" AND codigo_proyecto ="'.$codigo.'" ') as $row3){ 

                                                                    $codigo2=$row3['codigo'];
                                                                    $nombre_entregable=$row3['nombre'];
                                                                    $id_entregable=$row3['id_entregable'];  
                                                                    $usuario_asignado_entregable=$row3['usuario_asignado_entregable'];                  
                                                                                                                      ?> 
                                                                                                                            
                                                                   
                                                                              
                                                                              <div class="w-auto  p-3" style="background-color: #eee;">
                                                                              <div class="accordion" id="accordionExampleq">
                                                                              <div class="accordion-item">
                                                                                <h2 class="accordion-header" id="headingTwo">
                                                                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo<?php echo $id_entregable ; ?>" aria-expanded="false" aria-controls="collapseTwo<?php echo $id_entregable ; ?>">
                                                                                  <?php echo $nombre_entregable ; ?>
                                                                                  </button>
                                                                                </h2>
                                                                                <div id="collapseTwo<?php echo $id_entregable ; ?>" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExampleq">
                                                                                  <div class="accordion-body">
                                                                                      <!--     inicio de contenido  -->
                                                                                        <?php foreach ($link->query('SELECT a.id_seg,a.a_codigo_proyecto,a.a_id , a.documento, a.a_estado_seguimiento FROM archivos a WHERE id_seg= "'.$id_entregable.'"') as $row4){ 

                                                                                        $id_seg_archivos=$row4['id_seg'];
                                                                                        $a_codigo_proyecto_archivos=$row4['a_codigo_proyecto'];
                                                                                        $a_id_archivos=$row4['a_id'];
                                                                                        $a_estado_seguimiento_archivos=$row4['a_estado_seguimiento'];
                                                                                        $nombre_documento=$row4['documento'];
                                                                                        $espacio=trim($nombre_documento);
                                                                                                      
                                                                                        ?> 
                                                                                        <?php echo $nombre_documento.' Estado : '.$a_estado_seguimiento_archivos ; ?>
                                                                                      <br>
                                                                                      
                                                                                         <?php } ?> 
                                                      
                                                  
                                                                                      <!-- fin de contenido -->
                                                                                  </div>
                                                                                </div>
                                                                              </div>
                                                                             
                                                                                </div>
                                                                              
                                                                                </div>
                                                                         
                                                                          
                                                          <?php } ?> 
                                                      
                                                  
                                                            <!-- fin de contenido -->

                                                              </div>
                                                              <br>
                                                            </div>
                                                            </div>
                                                            <br>
                                                      </div>
                                                  
                                            <?php } ?> 
                                        
                                    
                  <!-- fin de contenido -->
                    </div>
                  </div>
                  </div>
                  <br>
            </div>

  
         
  <?php } ?> 

  