
        <!--Ejemplo tabla con DataTables-->
        <?php
        // Te recomiendo utilizar esta conección, la que utilizas ya no es la recomendada. 
        $link = new PDO('mysql:host=localhost;dbname=u415020159_mantizb', 'u415020159_mantizb', 'Mantizb*#17'); // el campo vaciío es para la password. 

        ?>
        <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NOMBRE</th>
                                    <th>APELLIDO</th>
                                    
                                </tr>
                                </thead>
                        <?php foreach ($link->query('SELECT * from obras') as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
                        <tr>
                            <td><?php echo $row['id'] // aca te faltaba poner los echo para que se muestre el valor de la variable.  ?></td>
                            <td><?php echo $row['nombre_obra'] ?></td>
                            <td><?php echo $row['fecha_agregada'] ?></td>
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