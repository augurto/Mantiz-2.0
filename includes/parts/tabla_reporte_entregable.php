
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
                                    <th>Documento</th>
                                    
                                    <th>Nombre Entregable</th>
                                    <th>Fecha entrega</th>
                                
                                    <th>Estado</th>
                                    <?php if ($tipo_user==1) {?>
                                        <th>Usuario</th>
                                        <?php }?>
                                    
                                    
                                </tr>
                                </thead>
                        <?php 
                        $count=1;
                        /* foreach ($link->query('SELECT * from entregables e inner join proyecto p on e.codigo_proyecto = p.codigo inner join archivos a on e.codigo_proyecto = a.codigo_proyecto order by a.codigo_proyecto desc') as $row){  ?>  */
                        
                        foreach ($link->query('SELECT DISTINCT * from archivos a inner join entregables e on a.a_codigo_proyecto=e.codigo_proyecto and a.id_seg=e.id inner join proyecto p on a.a_codigo_proyecto = p.codigo order by a_id desc') as $row){ // aca se hace la consulta e iterarla con each. ?> 

                        <?php
                        
                        $a_documento=$row['documento'];
                        
                        $a_estado_seguimiento=$row['a_estado_seguimiento'];

                                                                 
                        $nombre_entregable=$row['nombre'];
                        $nombre_proyecto=$row['nombre_proyecto'];                       
                        $usuario0=$row['a_usuario'];
                        $fecha_entrega=$row['fecha_entrega'];
                        $fecha_actual=strtotime(date("Y-m-d",time()));
                        $fecha_v=strtotime($fecha_entrega);                     
                        $estado=$row['estado'];
                         if ($fecha_actual>$fecha_v) { ?>
                             
                             <tr style="background-color: #FC1900 !important;">

                             <?php  }elseif ($fecha_actual==$fecha_v) { ?>
                             <tr style="background-color: #FFE97F !important;">

                             <?php  } else{?>
                             <tr style="background-color: #0029F9 !important;">
                             <?php }?>   
                             <td><?php echo $count++; ?></td>
                             
                             <!-- <td><a href="../../entregables.php?id_p=<?php echo $id; ?>"><?php echo $codigo.'-'.$extencion.'-'.$nombre_proyecto; ?></a></td> -->
                             
                             
                             
                             <td><span id="lastname<?php echo $nombre_proyecto; ?>"><?php echo $nombre_proyecto; ?></span></td>
                             <td><span id="firstname<?php echo $a_documento; ?>"><?php echo $a_documento; ?></span></td>
                             <td><span id="lastname<?php echo $nombre_entregable; ?>"><?php echo $nombre_entregable; ?></span></td>
                             <td><span id="address<?php echo $fecha_entrega; ?>"><?php echo $fecha_entrega; ?></span></td>
                             
                             <!-- <td><?php echo $fecha_fin ?></td> -->
                            <td><?php if ($a_estado_seguimiento==0) {
                                # code...
                                echo 'Pendiente';
                            } elseif ($a_estado_seguimiento==1) {
                                # code...
                                echo 'Aprobado';
                            } elseif ($a_estado_seguimiento==2) {
                                # code...
                                echo 'Observado';
                            }?></td>
                            <td><?php echo $usuario0 ?></td>
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

   