<?php require_once ('./config/conexion_tabla.php') ?>
<div class="modal fade" id="compromisos" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Sub tipo Proyecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                        <form action="../../includes/process/insert/insertar_material.php">
                        
                        <div class="modal-body">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" id="floatingInput" placeholder="Ingrese descripcion" name="nombre_material" required>
                          <input type="hidden" value="<?php echo $codigo_operacion;?>" name="cod_operacion">
                          <label for="floatingInput">Nombre <?php echo $valor1.' : '; ?></label>
                        </div>
                        <br>  
                            <div class="form-floating mb-3">
                                    <select class="form-control" required="" name="unidad" >
                                              <option disabled="disabled" value="" selected>Clic para seleccionar </option>
                                              <?php 

                                              $sss2=mysqli_query($con,"SELECT * FROM undad where estado_unidad=0 order by nombre_unidad");
                                                      while($f2=mysqli_fetch_assoc($sss2)){    

                                                          echo '<option value="'.$f2['id_uni'].'">'.$f2['nombre_unidad'].' - '.$f2['unidad'].'</option>';

                                              }
                                              
                                              ?>
                                    </select>
                              <label for="floatingInput">Selecciona <?php echo $valor1.': '; ?></label>
                            </div>
                                              <!-- fin de contenido -->
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                        
                        </form>

                        
                       


                <div class="modal-body">
                    <table id="example2" class="table table-hover" cellspacing="0" width="100%">
                      
                    <thead>
                          <tr>
                              <th>ID</th>
                              <th>Nombre</th>
                              <th>Unidad</th>
                              <th>Accion</th>
                              
                          </tr>
                        </thead>
                        <?php 
                        $count=1;
                        foreach ($link->query('SELECT * from materiales m inner join undad u on m.id_unidad = u.id_uni  order by nombre_material asc ') as $sub){  ?>
                        <?php
                        
                        $id_codgen=$sub['id_mat'];
                        $variable=$sub['nombre_material'];
                        $unidad=$sub['unidad'];
                        
                        ?>
                        <tr>    
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $variable;?></td>
                        <td><?php echo $unidad;?></td>
                        <?php if ($tipo_user==1) { ?>
                        <td>
                       
                                
                              
                                <a href="../../includes/process/eliminar/eliminar_subtipo.php?id=<?php echo $id_codgen ; ?>&variable=<?php echo $variable ;?>" >
                                  <i class="fas fa-trash" style="color: red;"></i>
                                  <!-- Counter - Messages -->
                                </a>
                               

                        </td>
                        <?php } ?>
                        </tr>
                         <?php } ?>       
                        
                        <tbody>
                        
                        </tbody>
                    </table>
                </div>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#compromisos > .modal-body').css({width:'auto',height:'auto', 'max-height':'100%'});
                        
                        $('#example2').DataTable({        
        language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar cualquier dato :",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
			     },
			     "sProcessing":"Procesando...",
            },
        //para usar los botones   
        responsive: "true",
        dom: 'Bfrtilp',       
        buttons:[ 
			{
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel"></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success'
			},
			{
				extend:    'pdfHtml5',
				text:      '<i class="fas fa-file-pdf"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger'
			},
			{
				extend:    'print',
				text:      '<i class="fa fa-print"></i> ',
				titleAttr: 'Imprimir',
				className: 'btn btn-info'
			},
		]	        
    }); 
                    });
                </script>
            </div>
        </div>
    </div>
  <!--   <div class="col-sm-12 text-center">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#compromisos">
    <i class="fa fa-plus" aria-hidden="true"></i> sub tipo de Proyecto
    </button>
    </div> -->