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
                              <th>No hay columnas</th>
                              <th>No hay columnas</th>
                              <th>No hay columnas</th>
                              <th>No hay columnas</th>
                              <th>No hay columnas</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                </div>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#compromisos > .modal-body').css({width:'auto',height:'auto', 'max-height':'100%'});
                        $("#example2").dataTable();
                    });
                </script>
            </div>
        </div>
    </div>
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#compromisos">
 Mostrar
</button>