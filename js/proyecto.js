function obtener_datos(id){
    var nombre = $("#nombre"+id).val();
    var codigo = $("#codigo"+id).val();
    var estado = $("#estado"+id).val();
    var presupuesto = $("#presupuesto"+id).val();

    var descripcion = $("#descripcion"+id).val();
    var cod = $("#cod"+id).val();
    

    $("#mod_nombre").val(nombre);
    $("#mod_estado").val(estado);
    $("#mod_codigo").val(codigo);
    $("#mod_cod").val(cod);
    $("#mod_presupuesto").val(presupuesto);
    $("#mod_descripcion").val(descripcion);
    $("#mod_id").val(id);
}