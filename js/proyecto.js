function obtener_datos(id){
    var nombre = $("#nombre"+id).val();
    var codigo = $("#codigo"+id).val();
    var estado = $("#estado"+id).val();
    var presupuesto = $("#presupuesto"+id).val();
    var cod = $("#cod"+id).val();
    var mod_descripcion = $("#descripcion"+id).val();
    

    $("#mod_nombre").val(nombre);
    $("#mod_estado").val(estado);
    $("#mod_codigo").val(codigo);
    $("#mod_cod").val(cod);
    
    $("#mod_presupuesto").val(presupuesto);
    $("#mod_descripcion").val(mod_descripcion);
    $("#mod_id").val(id);
}