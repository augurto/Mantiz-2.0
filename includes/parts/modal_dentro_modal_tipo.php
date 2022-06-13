<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Agregar Sub tipo Proyecto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form action="../../includes/process/insert/insertar_tipo_codigo_proyecto.php">
                        
                        <div class="modal-body">
                        <label for="inputProyec">Nombre del Sub Tipo de Proyecto</label>
                        <div class="input-group mb-3">
                          
                          <br>
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-sitemap" aria-hidden="true"></i></span>
                          </div>
                          <input type="text" class="form-control" placeholder="Nombre del Proyecto" id="nombre-tipo" name="nombre-tipo" >
                          
                        </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Agregar</button>
                        </div>
                        
                        </form>
      </div>
                    <div class="modal-body">
                            <table id="example2" class="table table-hover" cellspacing="0" width="100%">
                            
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Accion</th>
                                    
                                </tr>
                                </thead>
                                <?php 
                                $count=1;
                                foreach ($link->query('SELECT * from codigo_generado_proyecto order by id_cod_gen_pro desc') as $sub){  ?>
                                <?php
                                
                                $id=$sub['id_cod_gen_pro'];
                                $variable=$sub['variable'];
                                
                                ?>
                                <tr>    
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $variable;?></td>
                                <td>
                                    <button type="button" id="btnmodal" class="btn btn-danger" data-toggle="modal" data-target="#subTipo" data-cod="<?php echo $id; ?>" data-ape="<?php echo $nombre_proyecto; ?>">
                                            <i class="fa fa-trash"></i>
                                    </button>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Editar</button>
                                    </div>

                                </td>
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
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>
<a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Agregar Sub</a>