
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
                        <tr style="background-color: red !important;">
                            
                            <td ><?php echo $row['nombre_obra'] ?></td>
                            <td><?php echo $row['fecha_agregada'] ?></td>
                            <td><?php echo $row['estado'] ?></td>
                            <td>Accion Pendiente</td>
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