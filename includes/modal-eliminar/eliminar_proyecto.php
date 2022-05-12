<script >
                                      $(document).on("click", "#btnmodal",function () {
                                        
                                              var codigo =$(this).data('cod');
                                          var apellido =$(this).data('ape');

                                        $("#codigo").val(codigo);
                                        $("#apellido").val(apellido);
                          
                                      })

                                    </script>
<!-- Modal -->
    <div class="modal fade" id="ModalBorrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Proyecto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                        <div class="modal-body">
                            <input type="text" id="codigo" name="" ><br>
                            <input type="text" id="apellido" name="">
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
            </div>
        </div>
    </div>