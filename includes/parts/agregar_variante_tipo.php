<?php require_once ('./config/conexion_tabla.php') ?>
<div class="modal fade" id="compromisos" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Compromisos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="example2" class="display nowrap table-responsive">
                        <thead>
                          <tr>
                              <th>ID</th>
                              <th>Nombre</th>
                              
                          </tr>
                        </thead>
                        <?php 
                        $count=1;
                        foreach ($link->query('SELECT * from codigo_generado_proyecto') as $sub){ // aca se hace la consulta e iterarla con each. ?>
                        <?php
                        
                        $id=$sub['id_cod_gen_pro'];
                        $variable=$sub['variable'];
                        
                        ?>
                        <tr>    
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $variable;?></td>
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
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#compromisos">
 Mostrar
</button>