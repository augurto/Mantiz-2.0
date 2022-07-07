
<!-- inicio de la tabla -->

  <?php foreach ($link->query('SELECT * from users group by username') as $row){ // aca puedes hacer la consulta e iterarla con each.
    $contador=1; 
    $username=$row['username'];
    $id_username=$row['id'];
   /*  $cod_proyecto=$row['a_codigo_proyecto']; */ ?> 
       
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $username; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                      <?php echo $username ; ?>
                    </button>
                  </h2>
                  <div id="flush-collapse<?php echo $username; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <?php foreach ($link->query('SELECT * from archivos') as $row2){ // aca puedes hacer la consulta e iterarla con each.
                            $contador=1; 
                            $id2=$row2['a_id'];
                            $documento=$row2['documento'];
                          /*  $cod_proyecto=$row['a_codigo_proyecto']; */ ?> 
                              
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $id2; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                              <?php echo $username ; ?>
                                            </button>
                                          </h2>
                                          <div id="flush-collapse<?php echo $id2; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body"> <?php echo 'documento' ; ?></div>
                                          </div>
                                          </div>
                                    </div>
                                
                          <?php } ?> 
                      
                  
                  
                    </div>
                  </div>
                  </div>
            </div>
         
  <?php } ?> 

  