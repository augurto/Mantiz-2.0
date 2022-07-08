
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
                 asdsadsa
                    </div>
                  </div>
                  </div>
            </div>
         
  <?php } ?> 

  