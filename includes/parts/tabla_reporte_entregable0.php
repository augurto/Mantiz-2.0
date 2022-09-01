
        <!--Ejemplo tabla con DataTables-->
        <?php require_once ('./config/conexion_tabla.php') ?>
        <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-hover" cellspacing="0" width="100%">
                        
                        <thead>
                                <tr>
                                    <th>Id</th>
                                    
                                    <th>Proyecto</th>
                                    
                                    
                                    <th>Nombre Entregable</th>
                                    <th>Fecha entrega</th>
                                    <th>Fecha de creacion</th>
                                    
                                
                                 
                                    <?php if ($tipo_user==1) {?>
                                        <th>Usuario</th>
                                        <?php }?>
                                    
                                    
                                </tr>
                                </thead>
                        <?php 
                        $count=1;
                       /*  foreach ($link->query('SELECT * from archivos a right join entregables e on a.id_seg=e.id inner join users u on e.usuario_asignado_entregable=u.id where a.id_seg IS NULL order by a_id desc') as $row){  ?>  */
                        foreach ($link->query(' SELECT  p.nombre_proyecto as nom_proyecto , e.nombre as nom_entregable, e.fecha_subida_entregable as f_subida,e.fecha_entrega as f_entrega, u.username as nom_usuario FROM entregables e  INNER JOIN proyecto p on e.codigo_proyecto = p.id INNER JOIN users u ON u.id=e.usuario_asignado_entregable   WHERE e.id NOT IN ( SELECT archivos.id_seg FROM archivos) ORDER BY e.fecha_subida_entregable DESC ') as $row){  ?> 
                        
                       

                                <!-- 
                                                SELECT e.id,e.codigo_proyecto, e.nombre, e.fecha_subida_entregable, e.usuario_asignado_entregable FROM entregables e  
                                WHERE id NOT IN ( SELECT archivos.id_seg FROM archivos)  -->
                        <?php
                        
                        $a_documento=$row['documento'];
                        $proyecto=$row['nom_proyecto'];
                        $nombre_entregable=$row['nom_entregable'];
                        $fecha_subida_entregable=$row['f_subida'];
                        $fecha_entrega=$row['f_entrega'];
                        $nombre_usuario_entregable=$row['nom_usuario'];

                                                   
                        $fecha_actual=strtotime(date("Y-m-d",time()));
                        $fecha_v=strtotime($fecha_entrega);                     
                        $estado=$row['estado'];
                        
                         if ($fecha_actual>$fecha_v) { ?>
                             
                             <tr style="background-color: #F93422 !important;">

                             <?php  }elseif ($fecha_actual==$fecha_v) { ?>
                             <tr style="background-color: #FFF27F !important;">

                             <?php  } else{?>
                             <tr style="background-color: #8FA0F7 !important;">
                             <?php }?>   
                             <td><?php echo $count++; ?></td>
                             
                             <!-- <td><a href="../../entregables.php?id_p=<?php echo $id; ?>"><?php echo $codigo.'-'.$extencion.'-'.$nombre_proyecto; ?></a></td> -->
                             
                             
                             
                             <td><span id="lastname<?php echo $proyecto; ?>"><?php echo $proyecto; ?></span></td>
                             
                             <td><span id="lastname<?php echo $nombre_entregable; ?>"><?php echo $nombre_entregable; ?></span></td>
                             <td><span id="address<?php echo $fecha_entrega; ?>"><?php echo $fecha_entrega; ?></span></td>
                             <td><?php echo $fecha_subida_entregable;?></td>
                             
                             <!-- <td><?php echo $fecha_fin ?></td> -->
                            
                            <td><?php echo $nombre_usuario_entregable ?></td>
                            <!-- <?php if ($tipo_user==1) { ?> -->
                              
                            <!-- <td>
                         
                                    <button type="button" id="btnmodal" class="btn btn-primary" data-toggle="modal" data-target="#ModalEdit" data-nom="<?php echo $codigo; ?>" data-nom2="<?php echo $nombre_proyecto; ?>" data-ape="<?php echo $presupuesto;?>" data-estado="<?php echo $estado;  ?>" >
                                    <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" id="btnmodal" class="btn btn-danger" data-toggle="modal" data-target="#ModalBorrar" data-cod="<?php echo $codigo; ?>" data-ape="<?php echo $nombre_proyecto; ?>">
                                    <i class="fa fa-trash"></i>
                                    </button>

                            </td> -->
                            <!-- <?php }
                            ?> -->
                            
                              <!-- <a href="../../includes/process/eliminar/eliminar_proyecto.php?id_p=<?php echo $id_proyecto; ?>" class="btn btn-danger"  title='Borrar proyecto desde a'><i class="fa fa-trash"></i></a> -->
                          
                        </tr>
                        <?php
                            }
                        ?>
                        </table>
                </table>          
                    </div>
                </div>
        </div>  
    </div>    

   