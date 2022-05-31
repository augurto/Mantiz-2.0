                                <script >
                                      $(document).on("click", "#btnmodal",function () {
                                        
                                              var nombre =$(this).data('nom');
                                              var apellido =$(this).data('ape')
                                              var estado =$(this).data('estado');

                                        $("#nombre").val(nombre);
                                        $("#apellido").val(apellido);
                                        $("#estado").val(estado);
                          
                                      })

                                    </script>
<?php
$datos = "<script>estado</script>";
echo $datos;
?>
<!-- Modal -->
    <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Proyecto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <form action="">
                        <div class="modal-body">
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Cod Proyecto</span>
                        <input type="text" class="form-control" id="nombre" aria-label="Username" aria-describedby="basic-addon1" readonly>
                        </div>
                        <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Extension</label>
                                <select class="form-control" name="id_entregable" id="id_entregable" required="">
                                            <option disabled="disabled" value="" selected>Clic para ver</option>
                                            <?php 

                                            $sss=mysqli_query($con,"SELECT * FROM codigo_generado_proyecto");
                                                    while($f=mysqli_fetch_assoc($sss)){    

                                                        echo '<option value="'.$f['id_cod_gen_pro'].'">'.$f['variable'].'</option>';

                                            }
                                            
                                            ?>
                                </select>
                                        
                        </div>                  
                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Presupuesto</span>
                        <input type="text" class="form-control" id="apellido" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Estado</span>
                        
                        <input type="text" class="form-control" id="estado" aria-label="Username" aria-describedby="basic-addon1">
                            <select class="form-select" aria-label="Default select example">
                            <option selected>Seleciona Estado</option>
                            <option value="0">Pendiente</option>
                            <option value="1">Terminado</option>
                            <option value="2">Inactivo</option>
                            </select>
                        </div>
                                          
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>

