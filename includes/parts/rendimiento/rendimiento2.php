 <!--     inicio de contenido  -->
 <?php foreach ($link->query('SELECT a.id_seg,a.a_codigo_proyecto,a.a_id , a.documento, a.a_estado_seguimiento FROM archivos a ') as $row4){ 

        $id_seg_archivos=$row4['id_seg'];
        $a_codigo_proyecto_archivos=$row4['a_codigo_proyecto'];
        $a_id_archivos=$row4['a_id'];
        $a_estado_seguimiento_archivos=$row4['a_estado_seguimiento'];
        $nombre_documento=$row4['documento'];
        $espacio=trim($nombre_documento);
                       
?> 
                 <div class="w-50 p-3" style="background-color: #eee;"> 
                                                                              <?php echo $nombre_documento ; ?>
                                                                           <br>
                                                                            <?php echo $a_estado_seguimiento_archivos ; ?>
                                                                           
                                                                          
                </div>
                                                                
                                                          <?php } ?> 
                                                      
                                                  
                                                    <!-- fin de contenido -->