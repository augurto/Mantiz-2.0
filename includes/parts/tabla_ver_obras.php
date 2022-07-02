
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
                                    <th>Material</th>
                                    <th>Usuario</th>
                                    <th>Fecha</th>
                                    <th>Tipo</th>
                                   
                                    
                                </tr>
                                </thead>
                        <?php foreach ($link->query('SELECT * from operaciones') as $row){ // aca se hace la consulta e iterarla con each. ?> 
                        <?php
                        $proyecto_operacion=$row['proyecto_operacion'];
                        $nombre_operacion=$row['nombre_operacion'];
                        $usuario_maker_operacion=$row['usuario_maker_operacion'];
                        $fecha_agregada=$row['fecha_agregada'];
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
                             
                             <td><?php echo $fecha_agregada;?> </td>
                        
                            <td><!-- <?php if ($tipo_operacion==0) {
                         
                                echo 'Ingreso';
                            } elseif ($tipo_operacion==1) {
                          
                                echo 'Egreso';
                            } elseif ($tipo_operacion==2) {
                                
                                echo 'Otro';
                            }?> --> <?php echo $tipo_operacion;?></td>
                            
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