
        <!--Ejemplo tabla con DataTables-->
       <?php require_once ('./config/conexion_tabla.php') ?>
        <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        
                        <thead>
                                <tr>
                                    
                                    <th>Obra</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Accion</th>
                                    
                                </tr>
                                </thead>
                        <?php foreach ($link->query('SELECT * from obras') as $row){ // aca se hace la consulta e iterarla con each. ?> 
                        <?php
                        $nombre_obra=$row['nombre_obra'];
                        $fecha_agregada=$row['fecha_agregada'];
                        $estado=$row['estado'];

                       ?>
                        <tr style="background-color: blue !important;">
                            
                            <td><?php echo $nombre_obra ?></td>
                            <td><?php echo $fecha_agregada ?></td>
                            <td><?php echo $estado ?></td>
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