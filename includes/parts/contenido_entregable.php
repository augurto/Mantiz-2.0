<br>
 <br>
 <!-- Begin Page Content -->
 <div class="container-fluid">



        <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><b><?php echo $nombre; ?> </b></h1>
            <a href="#" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"   data-toggle="modal" data-target="#SubirArchivo"  ><i class="fas fa-folder fa-sm text-white-50"></i> Subir Archivos</a>

            
          </div>

          <div>

          <a href="#" class="btn btn-primary btn-icon-split" title='Entregables' onclick="segg(<?php echo $id_p;?>);" data-toggle="modal" data-target="#AgregarEntregable">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text"> Agregar Entregables</span>
                  </a> 
          </div> -->
         <!--  <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <a href="#" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"   data-toggle="modal" data-target="#AgregarEntregable"><i class="fas fa-user fa-sm text-white-50"></i> Entregables</a>
          </div> -->
     
         <!-- aca va listar_entregables_tabla.php -->

          <!-- DataTales Example -->
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
                <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <!-- <h6 class="m-0 font-weight-bold text-primary"><?php echo $nom." - ".$estado_entregable; ?></h6> -->
                <h6 class="m-0 font-weight-bold text-primary"><?php echo $nom." - "; ?><?php if ($estado_entregable==0) {
                    # code...
                    echo 'Pendiente';
                }elseif ($estado_entregable==1) {
                    # code...
                    echo 'Aprobado';
                } else{
                    echo 'Observado';
                }?></h6>
                </div>
                <div>

                <?php if ($tipo_user==1) { ?>
                <form action="../../includes/process/actualizar/actualizar_estado_entregable.php">
                <div class="input-group input-group-sm mb-3">
                <input type="hidden" value="<?php echo $id; ?>" id="id" name="id" >
                <input type="hidden" value="<?php echo $id_p; ?>" id="id_p" name="id_p" >
                
                </div>
                <div class="input-group input-group-sm mb-3" style="background-color: #FFF0F5 !important;" >
                <div class="input-group" style="padding: 0px 20px !important;">
             
                <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" id="estado_entregable1" name="estado_entregable1">
                <option selected>Selecciona Estado</option>
                  <option value="0">Pendiente</option>
                  <option value="1">Aprobado</option>
                  <option value="2">Observado</option>
                </select>
                <button class="btn btn-outline-primary" type="submit" ><i class="fa fa-check" aria-hidden="true"></i></button>
                
                
              </div>
              </div>
              
                </form>
                <?php } ?>
                </div>
                
                <!-- Card Body -->
                <?php 
            if ($estado_entregable==0) { ?>
                <div class="card-body" style="background-color: #FCF3CF !important;" >

                <?php } elseif($estado_entregable==1){ ?>
                    <div class="card-body" style="background-color: #F0FFF0 !important;" >

                    <?php } else{?>    
                        <div class="card-body" style="background-color: #FFF0F5 !important;" >

                        <?php }?> 
            
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

              

                  <!-- <div  align="center"><img src="img/file.png" width="00px" height="auto"></div> -->
                  <div align="center"><a href="archivos/<?php echo  $id_p  ; ?>/<?php echo  $id_ent; ?>/<?php echo  $documento; ?>" download="archivos/<?php echo  $id_p  ; ?>/<?php echo  $id_ent  ; ?>/<?php echo  $documento; ?>"><i class="fa fa-download"></i> <?php echo $documento.$id_ent; ?></a></div>

                  <div ><p>URL:  <a href="<?php echo  $link  ; ?>/<?php echo  $link; ?>" download="<?php echo  $link  ; ?>/<?php echo  $link; ?>" target="_blank"><i class="fa fa-cloud-download" ></i>  <?php echo $link; ?></a></p></div>

                  
               <?php echo $descripcion; ?>
               <br>
               <?php echo "Usuario : " .$usuario_seguimiento; ?>
                </div>
              </div>
            </div>

            


          
          
          <?php } ?>
        </div>

        </div>