 <!--     inicio de contenido  -->
 <?php foreach ($link->query('SELECT p.codigo,p.extension,p.nombre_proyecto,e.codigo_proyecto, e.nombre, e.usuario_asignado_entregable 
 FROM entregables e INNER JOIN proyecto p on e.codigo_proyecto=p.id
 WHERE usuario_asignado_entregable ="'.$id_username.'" GROUP by p.nombre_proyecto') as $row2){ // aca puedes hacer la consulta e iterarla con each.
                            
                            $codigo=$row2['codigo'];
                            $nombre_proyecto=$row2['nombre_proyecto'];
                            $extension=$row2['extencion'];
                          /*  $cod_proyecto=$row['a_codigo_proyecto']; */ ?> 
                                <div class="w-100 p-3" style="border: 1px solid #D1CFFC;">
                                    
                                              <?php echo $extension.' - '.$nombre_proyecto ; ?>
                                         
                                            

                                           
                                </div>
                                <br>
                                <?php include 'rendimiento1.php'; ?>
                          <?php } ?> 
                      
                  
                     <!-- fin de contenido -->