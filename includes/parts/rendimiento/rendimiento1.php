 <!--     inicio de contenido  -->
                                                        <?php foreach ($link->query('SELECT p.codigo,p.nombre_proyecto,e.id as id_entregable ,e.codigo_proyecto, e.nombre, e.usuario_asignado_entregable 
 FROM entregables e INNER JOIN proyecto p on e.codigo_proyecto=p.id
 WHERE usuario_asignado_entregable ="'.$id_username.'" AND codigo_proyecto ="'.$codigo.'" ') as $row3){ 

       $codigo=$row3['codigo'];
       $nombre_entregable=$row3['nombre'];
       $id_entregable=$row3['id_entregable'];  
       $usuario_asignado_entregable=$row3['usuario_asignado_entregable'];                  
                                                        ?> 
                <div class="w-75 p-3" style="background-color: #eee;">     
                                                              
                                                                              <?php echo $nombre_entregable ; ?>
                                                                        
                                                                          <br>
                                                                            <?php include 'rendimiento2.php'; ?>
                                                                      
                                                                    </div>
                                                                
                                                          <?php } ?> 
                                                      
                </div>                                
                                                    <!-- fin de contenido -->