
        <!--Ejemplo tabla con DataTables-->
        <?php require_once ('./config/conexion_tabla.php') ?>
        <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        
                        <thead>
                                <tr>
                                    
                                    <th>Proyecto</th>
                                    <th>Codigo</th>
                                    <th>Presupuesto</th>
                                    <th>Fecha inicio</th>
                                    <th>Fecha Fin</th>
                                    <th>Estado</th>
                                    <th>Accion</th>
                                    
                                </tr>
                                </thead>
                        <?php foreach ($link->query('SELECT * from proyecto') as $row){ // aca se hace la consulta e iterarla con each. ?> 
                        <?php
                        $id_proyecto=$row['id'];
                        $codigo=$row['codigo'];
                        $extencion=$row['extencion'];
                        $nombre_proyecto=$row['nombre_proyecto'];
                        $presupuesto=$row['presupuesto'];
                        $usuario=$row['usuario_maker'];
                        $fecha_ini=$row['fecha_ini'];
                        $fecha_fin=$row['fecha_fin'];

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
                            
                            
                             <td><a href="../../entregables.php?id_p=<?php echo $id_proyecto; ?>"><?php echo $nombre_proyecto; ?></a></td>
                             
                             <td><?php echo $codigo ?></td>
                             <td><?php echo $presupuesto ?></td>
                             <td><?php echo $fecha_ini ?></td>
                             <td><?php echo $fecha_fin ?></td>
                            <td><?php if ($estado==0) {
                                # code...
                                echo 'Inactivo';
                            } elseif ($estado==1) {
                                # code...
                                echo 'Terminado';
                            } elseif ($estado==2) {
                                # code...
                                echo 'Activo';
                            }?></td>
                            <td>Boton Accion Pendiente</td>
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