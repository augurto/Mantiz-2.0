 <br>
 <br>
 <div class="row">       
          <?php $sql="SELECT * FROM  archivos WHERE a_codigo_proyecto='$id_p' /* AND id_miembros='$est' */ order by id_seg asc";
    $query = mysqli_query($con, $sql);
        while ($row=mysqli_fetch_array($query)){
          $id=$row['a_id'];
          $a_codigo_proyecto=$row['a_codigo_proyecto'];
            $id_seg=$row['id_seg'];
            $descripcion=$row['a_descripcion'];
            $documento=$row['documento'];
            $estado_entregable=$row['a_estado_seguimiento'];
            $link=$row['link'];
            $usuario_seguimiento=$row['a_usuario'];

            $gd=mysqli_query($con,"SELECT * FROM entregables WHERE  id='".$id_seg."' AND codigo_proyecto='".$id_p."'");
            $rwd=mysqli_fetch_array($gd);
            $nom=$rwd["nombre"];
            
            $id_ent=$rwd["id"];

            $t=mysqli_query($con,"SELECT count(*) as t , estado FROM comments WHERE codigo_proyecto='".$id_p."' AND id_seguimiento='".$id."' AND id_entregable='".$id_ent."'");
            $rwdt=mysqli_fetch_array($t);
            $ts=$rwdt["t"];
            $estado=$rwdt['estado'];

    ?>      
           
            
           <div class="col-6 col-md-4">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $nom." - "; ?><?php if ($estado_entregable==0) {
                    # code...
                    echo 'Pendiente';
                }elseif ($estado_entregable==1) {
                    # code...
                    echo 'Aprobado';
                } else{
                    echo 'Observado';
                }?></li>
                <li class="list-group-item"><?php if ($tipo_user==1) { ?>
                <form action="../../includes/process/actualizar/actualizar_estado_entregable.php">
                <input type="hidden" value="<?php echo $id; ?>" id="id" name="id" >
                <input type="hidden" value="<?php echo $id_p; ?>" id="id_p" name="id_p" >
                <select class="form-select" aria-label="Default select example" id="estado_entregable1" name="estado_entregable1">
                  <option selected>Cambiar Estado</option>
                  <option value="0">Pendiente</option>
                  <option value="1">Aprobado</option>
                  <option value="2">Observado</option>
                </select>
                <button type="submit" class="btn btn-outline-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"><i class="fa fa-check" aria-hidden="true"></i></button>
                </form>
                <?php } ?>
                </li>
                <li class="list-group-item">
                <a href="archivos/<?php echo  $id_p  ; ?>/<?php echo  $id_ent; ?>/<?php echo  $documento; ?>" download="archivos/<?php echo  $id_p  ; ?>/<?php echo  $id_ent  ; ?>/<?php echo  $documento; ?>"><i class="fa fa-download"></i> <?php echo $documento.$id_ent; ?></a>
                </li>
                <li class="list-group-item">
                <p>URL: </p> <a href="<?php echo  $link  ; ?>/<?php echo  $link; ?>" download="<?php echo  $link  ; ?>/<?php echo  $link; ?>" target="_blank"><i class="fa fa-cloud-download" ></i>  <?php echo $link; ?></a>
                <?php echo $descripcion; ?>
                <?php echo "Usuario : " .$usuario_seguimiento.'  '; ?>
                <a href="#"  data-toggle="modal" data-target="#comments" onclick="comments(<?php echo $id_ent; ?>, <?php echo $id; ?>);">
                <?php echo $ts; ?> <i class="fas fa-comments fa-fw"></i>
                    <!-- Counter - Messages -->
                  </a>
                  <?php if ($tipo_user==1) { ?>
                  
                
                  <a href="../../includes/process/eliminar/eliminar_entregable.php?entregable=<?php echo $documento ; ?>&proyecto=<?php echo $a_codigo_proyecto ;?>&id_entregable=<?php echo $id_seg ; ?>" >
                    <i class="fas fa-trash" style="color: red;"></i>
                    <!-- Counter - Messages -->
                  </a>
                  <?php } ?>
                </li>
              </ul>
            </div>
            
                    

         
          
          <?php } ?>
    </div>