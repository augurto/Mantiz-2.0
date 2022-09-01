<?php require_once ('./config/conexion_tabla.php') ?>
<div class="modal fade" id="unidad" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Unidad de <?php echo $valor1;?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                        <form action="../../includes/process/insert/insertar_unidad.php">
                        
                        <div class="modal-body">
                        <label for="inputProyec">Nombre de la Unidad.</label>
                        <div class="input-group mb-3">
                          
                          <br>
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-sitemap" aria-hidden="true"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Nombre de la Unidad" id="nombre-tipo" name="nombre-tipo" >
                          <br>
                          
                          <input type="text" class="form-control" placeholder="Codigo de la Unidad" id="codigo-tipo" name="codigo-tipo" >
                          <input type="hidden" value="<?php echo $codigo_operacion;?>" name="cod_operacion">
                          
                        </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                        
                        </form>

                        
                       


                <div class="modal-body">
                    <table id="example3" class="table table-hover" cellspacing="0" width="100%">
                      
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
                        foreach ($link->query('SELECT * from undad order by nombre_unidad asc') as $sub2){  ?>
                        <?php
                        
                        $id_codgen=$sub2['id_uni'];
                        $variable=$sub2['unidad'];
                        $nombre=$sub2['nombre_unidad'];
                        $estado=$sub2['estado_unidad'];
                        
                        ?>
                        <tr>    
                        <td><?php echo $count++; ?></td>
                        <?php if ($estado==1) { ?>
                          <td><del><?php echo $nombre;?></del></td>
                        <?php }else { ?>
                          <td><?php echo $nombre;?></td>
                        <?php } ?>
                        
                        <td><?php echo $variable;?></td>
                        <?php if ($tipo_user==1) { ?>
                        <td>
                       
                                
                              
                                <a href="../../includes/process/eliminar/eliminar_unidad_material.php?id=<?php echo $id_codgen ; ?>&variable=<?php echo $variable ;?>&codigo_operacion=<?php echo $codigo_operacion ;?>" >
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
                        $('#unidad> .modal-body').css({width:'auto',height:'auto', 'max-height':'100%'});
                        
                        $('#example3').DataTable({        
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