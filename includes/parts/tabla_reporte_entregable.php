
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
                                    <th>Usuario</th>
                                    
                                    <th>Nombre Entregable</th>
                                    <th>Fecha entrega</th>
                                
                                    <th>Estado</th>
                                    <?php if ($tipo_user==1) {?>
                                        <th>Accion</th>
                                        <?php }?>
                                    
                                    
                                </tr>
                                </thead>
                        <?php 
                        $count=1;
                        /* foreach ($link->query('SELECT * from entregables e inner join proyecto p on e.codigo_proyecto = p.codigo inner join archivos a on e.codigo_proyecto = a.codigo_proyecto order by a.codigo_proyecto desc') as $row){  ?>  */
                        
                        foreach ($link->query('SELECT a.codigo_proyecto as a_codigo_proyecto,a.documento as a_documento, a.id_seg as a_id_seg , a.descripcion as a_descripcion,a.estado_seguimiento as a_estado_seguimiento, e.nombre as e_nombre_entregable   from archivos a inner join entregables e on a.codigo_proyecto=e.codigo_proyecto inner join proyecto p on a.codigo_proyecto = p.codigo') as $row){ // aca se hace la consulta e iterarla con each. ?> 

                        <?php
                        $a_codigo_proyecto=$row['a_codigo_proyecto'];
                        $a_documento=$row['a_documento'];
                        $a_id_seg=$row['a_id_seg'];
                        $a_descripcion=$row['a_descripcion'];
                        $a_estado_seguimiento=$row['a_estado_seguimiento'];

                        $id=$row['e.id'];
                        $codigo=$row['a.codigo_proyecto'];                                          
                        $nombre_entregable=$row['e_nombre_entregable'];
                        $nombre_proyecto=$row['nombre_proyecto'];                       
                        $usuario0=$row['usuario_maker'];
                        $fecha_entrega=$row['fecha_entrega'];                     
                        $estado=$row['estado'];
                         if ($estado==0) { ?>
                             
                             <tr style="background-color: #F0FFFF !important;">

                             <?php  }elseif ($estado==1) { ?>
                             <tr style="background-color: #F0FFF0 !important;">

                             <?php  }elseif ($estado==2) { ?>
                             <tr style="background-color: #FFE4E1 !important;">
                       
                             <?php } else{?>
                             <tr style="background-color: #FDF5E6 !important;">
                             <?php }?>   
                             <td><?php echo $count++; ?></td>
                             
                             <!-- <td><a href="../../entregables.php?id_p=<?php echo $id; ?>"><?php echo $codigo.'-'.$extencion.'-'.$nombre_proyecto; ?></a></td> -->
                             
                             
                             
                             <td><span id="lastname<?php echo $a_codigo_proyecto; ?>"><?php echo $a_codigo_proyecto; ?></span></td>
                             <td><span id="firstname<?php echo $a_documento; ?>"><?php echo $a_documento; ?></span></td>
                             <td><span id="lastname<?php echo $nombre_entregable; ?>"><?php echo $nombre_entregable; ?></span></td>
                             <td><span id="address<?php echo $a_descripcion; ?>"><?php echo $a_descripcion; ?></span></td>
                             <!-- <td><?php echo $fecha_ini ?></td>
                             <td><?php echo $fecha_fin ?></td> -->
                            <td><?php if ($a_estado_seguimiento==0) {
                                # code...
                                echo 'Pendiente';
                            } elseif ($a_estado_seguimiento==1) {
                                # code...
                                echo 'Terminado';
                            } elseif ($a_estado_seguimiento==2) {
                                # code...
                                echo 'Inactivo';
                            }?></td>
                            <?php if ($tipo_user==1) { ?>
                              
                            <td>
                         
                                    <button type="button" id="btnmodal" class="btn btn-primary" data-toggle="modal" data-target="#ModalEdit" data-nom="<?php echo $codigo; ?>" data-nom2="<?php echo $nombre_proyecto; ?>" data-ape="<?php echo $presupuesto;?>" data-estado="<?php echo $estado;  ?>" >
                                    <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" id="btnmodal" class="btn btn-danger" data-toggle="modal" data-target="#ModalBorrar" data-cod="<?php echo $codigo; ?>" data-ape="<?php echo $nombre_proyecto; ?>">
                                    <i class="fa fa-trash"></i>
                                    </button>

                            </td>
                            <?php }
                            ?>
                            
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

   