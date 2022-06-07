
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
                        foreach ($link->query('SELECT * from archivos a inner join proyecto p on a.codigo_proyecto = p.codigo inner join entregables e on e.codigo_proyecto=p.codigo_proyecto order by codigo_proyecto desc') as $row){ // aca se hace la consulta e iterarla con each. ?> 
                        <?php
                        
                        $id=$row['a.id'];
                        $codigo=$row['codigo_proyecto'];
                      
                        
                        $nombre_entregable=$row['documento'];
                        $nombre_proyecto=$row['nombre_proyecto'];
                        $descripcion=$row['a.descripcion'];
                       
                        $usuario0=$row['usuario'];
                        $fecha_entrega=$row['fecha_entrega'];
                        

                        $estado=$row['estado_seguimiento'];
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
                             
                             
                             
                             <td><span id="lastname<?php echo $nombre_entregable; ?>"><?php echo $nombre_proyecto; ?></span></td>
                             <td><span id="firstname<?php echo $usuario0; ?>"><?php echo $usuario0; ?></span></td>
                             <td><span id="lastname<?php echo $nombre_entregable; ?>"><?php echo $nombre_entregable; ?></span></td>
                             <td><span id="address<?php echo $descripcion; ?>"><?php echo $descripcion; ?></span></td>
                             <!-- <td><?php echo $fecha_ini ?></td>
                             <td><?php echo $fecha_fin ?></td> -->
                            <td><?php if ($estado==0) {
                                # code...
                                echo 'Pendiente';
                            } elseif ($estado==1) {
                                # code...
                                echo 'Terminado';
                            } elseif ($estado==2) {
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

   