<script >
                                      $(document).on("click", "#btnmodal",function () {
                                        
                                              var codigo =$(this).data('cod');
                                          var apellido =$(this).data('ape');

                                        $("#codigo").val(codigo);
                                        $("#apellido").val(apellido);
                          
                                      })
                                      var objetivo = document.getElementById('texto_nav1');
                                      objetivo.innerHTML = apellido;
                                    </script>
<!-- Modal -->
    <div class="modal fade" id="ModalBorrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Borrar Proyecto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                        <div class="modal-body">
                            <input type="hidden" id="codigo" name="" ><br>
                            
                            <div class="alert alert-danger" role="alert">
                              <center>
                            <label for=""> Estas seguro que quieres eliminar el proyecto <?php ?> </label>
                            <label id="texto_nav1"></label>          
                            
                            </center>
                          </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Arrugo</button>
                        <button type="button" class="btn btn-primary">Borrar</button>
                    </div>
            </div>
        </div>
    </div>