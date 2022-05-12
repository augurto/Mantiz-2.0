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
          <?php $sql="SELECT * FROM  seguimientos WHERE codigo_proyecto='$id_p' /* AND id_miembros='$est' */ order by id_seg asc";
    $query = mysqli_query($con, $sql);
        while ($row=mysqli_fetch_array($query)){
           $id=$row['id'];
            $id_seg=$row['id_seg'];
            $descripcion=$row['descripcion'];
            $documento=$row['documento'];
            $estado_entregable=$row['estado_seguimiento'];
            $link=$row['link'];
            $usuario_seguimiento=$row['usuario'];

            $gd=mysqli_query($con,"SELECT * FROM entregables WHERE  id='".$id_seg."' AND codigo_proyecto='".$id_p."'");
            $rwd=mysqli_fetch_array($gd);
            $nom=$rwd["nombre"];
            
            $id_ent=$rwd["id"];

            $t=mysqli_query($con,"SELECT count(*) as t , estado FROM comments WHERE codigo_proyecto='".$id_p."' AND id_seguimiento='".$id."' AND id_entregable='".$id_ent."'");
            $rwdt=mysqli_fetch_array($t);
            $ts=$rwdt["t"];
            $estado=$rwdt['estado'];

    ?>      
            <!-- condicional para colores dependiendo al estado del entregable -->
            <!-- caso activo -->
            
                

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
                <!-- Card Body -->
                <?php 
            if ($estado_entregable==0) { ?>
                <div class="card-body" style="background-color: #F0F8FF !important;" >

                <?php } elseif($estado_entregable==1){ ?>
                    <div class="card-body" style="background-color: #F0FFF0 !important;" >

                    <?php } else{?>    
                        <div class="card-body" style="background-color: #FFF0F5 !important;" >

                        <?php }?> 
            
                <a href="#"  data-toggle="modal" data-target="#comments" onclick="comments(<?php echo $id_ent; ?>, <?php echo $id; ?>);">
                <?php echo $ts; ?> <i class="fas fa-comments fa-fw"></i>
                <!-- Counter - Messages -->
              </a>
              <a href="#" data-toggle="modal" data-target="#borrar" onclick="comments(<?php echo $id_ent; ?>, <?php echo $id; ?>);">
                <?php echo $ts; ?><i class="fas fa-trash"></i>
                <!-- Counter - Messages -->
              </a>

              

                  <div  align="center"><img src="img/file.png" width="00px" height="auto"></div>
                  <div align="center"><a href="entregables/<?php echo  $id_p  ; ?>/<?php echo  $documento; ?>" download="entregables/<?php echo  $id_p  ; ?>/<?php echo  $documento; ?>"><i class="fa fa-download"></i> <?php echo $documento; ?></a></div>

                  <div align="center"><p>URL: </p> <a href="<?php echo  $link  ; ?>/<?php echo  $link; ?>" download="<?php echo  $link  ; ?>/<?php echo  $link; ?>" target="_blank"><i class="fa fa-cloud-download" ></i>  <?php echo $link; ?></a></div>

                  
                  

                  <br>
               <?php echo $descripcion; ?>
               <br>
               <?php echo "Usuario : " .$usuario_seguimiento; ?>
                </div>
              </div>
            </div>

            


          
          
          <?php } ?>
        </div>

        </div>