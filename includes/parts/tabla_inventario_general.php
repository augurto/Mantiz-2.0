
        <!--Ejemplo tabla con DataTables-->
        <div class="container">
        <div class="row">
                <div class="col-lg-12">

                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                           <tr>
                           <th>Id</th>
                           <th>Nombre de la Obra</th>
                           <th>Estado.</th>
                              <?php if($_SESSION['prol']=='administrador'|| $_SESSION['prol']=='Inv Principal'){?>
                           <th>Acciones</th>
                       <?php }?>
                           </tr>
                         </thead>
                         <tbody>
                       <?php
                       $count=1;
                       while ($row=mysqli_fetch_array($query)){
                               $id=$row['id'];
                               $programa=$row['nombre_obra'];
                                   $estado=$row['estado'];
                               
                                   if ($estado=='activo'){$label_class='warning '; $ico='info';}
                                   elseif ($estado=='terminado'){$label_class='primary'; $ico='check';}
                                   else{$text_estado="inactivo";$label_class='danger'; $ico='exclamation-triangle';}
                              
                               $fecha=$row['fecha_agregada'];
                               
                               
                           ?>
                           
                           
                           
                           <tr><input type="hidden" value="<?php echo $programa;?>" id="programa<?php echo $id;?>">
                           <input type="hidden" value="<?php echo $estado;?>" id="estado<?php echo $id;?>">
                               <td><?php echo $count++;?></td>
                               <td><?php echo $programa; ?></td>
                               <td><a href="#" class="btn btn-<?php echo $label_class;?> btn-icon-split">
                           <span class="icon text-white-50">
                             <i class="fas fa-<?php echo $ico; ?>"></i>
                           </span>
                           <span class="text"><?php echo $estado; ?></span>
                         </a></td>
                              <?php if($_SESSION['prol']=='administrador'|| $_SESSION['prol']=='Inv Principal'){?>	
                           <td ><span class="pull-right">
                           <a href="#" class='btn btn-success' title='Editar Obra' onclick="obtener_datos('<?php echo $id;?>');" data-toggle="modal" data-target="#myModal2"><i class="fa fa-edit"></i></a>
                           <a href="#" class='btn btn-success' title='Borrar Obra' onclick="eliminar('<?php echo $id;?>');"><i class="fa fa-trash"></i></a> 
                           <a href="ver_obra.php?id=<?php echo $id;?>&estado=<?php echo $estado;?>&nom=<?php echo $programa;?>" class='btn btn-success' title='Ver Obra'><i class="fa fa-file" aria-hidden="true"></i></a> 
                           </span></td>
                               <?php } ?>
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