<?php require_once ('./config/conexion_tabla.php') ?>
<div class="modal fade" id="compromisos" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Sub tipo Proyecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


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

                        
                       


                <div class="modal-body">
                <table id="personal" class="table table-hover" cellspacing="0" width="100%">
                <!-- <table id="example2" class="table table-hover" cellspacing="0" width="100%"> -->
                    <thead>
                            <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            
                            
                            </tr>
                        </thead>
                        <tbody></tbody>
                        </table>
                      
                   <!--  <thead>
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

                        </td>
                        </tr>
                         <?php } ?>       
                        
                        <tbody>
                        
                        </tbody>
                    </table> -->


                </div>
                <script type="text/javascript">

                        $(document).ready(function(){

                        var dataTable = $('#personal').DataTable({
                        "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
                        },
                        "processing" : true,
                        "serverSide" : true,
                        "order" : [],
                        "ajax" : {
                        url:"tabla-editar/datos.php",
                        type:"POST"
                        }
                        });

                        $('#personal').on('draw.dt', function(){/*`personal_nombre``personal_edad``personal_salario`*/
                        $('#personal').Tabledit({
                        url:'edicion.php',
                        dataType:'json',
                        columns:{
                        identifier : [0, 'idp'],
                        editable:[[1, 'personal_nombre'], [2, 'personal_edad'], [3, 'personal_salario']]
                        },
                        restoreButton:false,
                        onSuccess:function(data, textStatus, jqXHR)
                        {
                        if(data.action == 'delete')
                        {
                            $('#' + data.idp).remove();
                            $('#personal').DataTable().ajax.reload();
                        }
                        }
                        });
                        });
                        
                        }); 
                </script>
            </div>
        </div>
    </div>
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#compromisos">
 Mostrar
</button>