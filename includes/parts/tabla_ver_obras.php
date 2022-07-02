
        <!--Ejemplo tabla con DataTables-->
        <?php require_once ('./config/conexion_tabla.php') ?>
        <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        
                        <thead>
                                <tr>
                                    
                                    <th>Descripcion</th>
                                    <th>Material</th>
                                    <th>Usuario</th>
                                    
                                    <th>Fecha</th>
                                    <th>Tipo</th>
                                    <th>Cant</th>
                                   <th>pu</th>
                                    <th>SubTotal</th>
                                    
                                </tr>
                                </thead>
                        <?php foreach ($link->query('SELECT * from operaciones o inner join proyecto p on o.proyecto_operacion=p.codigo
                         inner join materiales m on o.nombre_operacion = m.id_mat
                         inner join users u on o.usuario_maker_operacion = u.id WHERE proyecto_operacion ="'.$codigo_operacion.'"' ) as $row){ // aca se hace la consulta e iterarla con each. ?> 
                        <?php
                        $proyecto_operacion=$row['nombre_proyecto'];
                        $nombre_operacion=$row['nombre_material'];
                        $usuario_maker_operacion=$row['username'];
                        $fecha_agregada=$row['fecha_agregada'];
                        $cantidad=$row['cantidad'];
                        $monto=$row['monto'];
                        $cant_monto=$row['cant_monto'];
                        $tipo_operacion=$row['tipo_operacion'];

                        $estado=$row['estado_operacion'];
                         if ($estado==0) { ?>
                             
                             <tr style="background-color: #F0FFFF !important;">

                             <?php  }elseif ($estado==1) { ?>
                             <tr style="background-color: #F0FFF0 !important;">

                             <?php  }elseif ($estado==2) { ?>
                             <tr style="background-color: #FFE4E1 !important;">
                       
                             <?php } else{?>
                             <tr style="background-color: #FDF5E6 !important;">
                             <?php }?>   
                            
                            
                             <td><?php echo $proyecto_operacion;?> </td>
                             <td><?php echo $nombre_operacion;?> </td>
                             <td><?php echo $usuario_maker_operacion;?> </td>
                             
                             <td><?php echo $cantidad;?> </td>
                             <td><?php echo $monto;?> </td>
                             <td><?php echo 'S/ '.$cant_monto;?> </td>
                             <td><?php echo $fecha_agregada;?> </td>
                        
                            <td><?php if ($tipo_operacion==0) {
                         
                                echo 'Ingreso';
                            } elseif ($tipo_operacion==1) {
                          
                                echo 'Egreso';
                            } elseif ($tipo_operacion==2) {
                                
                                echo 'Otro';
                            }?></td>
                            
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