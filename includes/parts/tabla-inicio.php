<div style="height:50px"></div>
        <!--Ejemplo tabla con DataTables-->
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        
                         <thead style="background-color: transparent !important;">
                           <tr>
                           
                           <th>Usuario</th>
                           <th>Proyecto</th>
                           <th>Entregables</th>
                           <th>Documento</th>
                           
                           <th>Estado</th>
                           <th>Fecha de entrega</th>
                              
                           </tr>
                         </thead>
                         <tbody>
                       <?php
                       $count=1;
                       $id_obrass=$_GET["id"];
                        $sql_obra="SELECT * FROM seguimientos s inner join entregables  e  on s.codigo_proyecto= e.codigo_proyecto INNER JOIN proyecto p on p.codigo = e.codigo_proyecto  where estado_seguimiento IN ('Observado','Pendiente') ";
                          $query = mysqli_query($con, $sql_obra);
                              while ($row=mysqli_fetch_array($query)){
                               $id=$row['id'];
                               
                               $usuario=$row['usuario'];
                               $documento=$row['codigo_proyecto'];
                                   $nombre_proyecto=$row['nombre'];
                                   $nombre_proyecto2=$row['nombre_proyecto'];
                                   $estado=$row['estado_seguimiento'];
                                   $unidad=$row['unidad'];
                                   $presupuesto=$row['presupuesto'];
                                   $fecha_agregado=$row['fecha_entrega'];
                                   $subtotal2=array_product($row['precio'],$row['cantidad']);
                                   $id_obra=$row['id_obra_mat'];
                                   $usuario_ob=$row['usuario_mat_obras'];
                                        
                              
                           ?>
                           
                           
                           
                           <tr><input type="hidden" value="<?php echo $programa;?>" id="programa<?php echo $id;?>">
                           <input type="hidden" value="<?php echo $estado;?>" id="estado<?php echo $id;?>">
                            
                               <td><?php echo $usuario; ?></td>
                                <td><?php echo $nombre_proyecto2;?></td>
                               <td><?php echo $nombre_proyecto; ?></td>
                             <td><?php echo $documento;?></td>
                             
                                
                             <td><?php echo $estado; ?></td>
                          
                             <td><?php echo $fecha_agregado; ?></td>
                              
                           </tr>
                           <?php
                       }
                       ?>
                       
                   </tbody>
                             
                       </table>                  
                    </div>
                </div>
        </div>  
    </div>    