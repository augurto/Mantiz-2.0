<!DOCTYPE html>
<html>
<head>
  <title>Usuarios</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
 
<body>
<!-- datos de sesion -->
<input type="hidden" value="<?php echo $usuario;?>">
  <input type="hidden" value="<?php echo $id_usuario;?>">
  <!-- fin de datos sesion -->
    <!-- procesos de modal -->
    

    
    <!-- fin de procesos de modal -->

    <?php include '../includes/header.php';?>
    <div style="height:50px"></div>

<div class="container mt-5" style="background-color: #f9f9f9;">
  <br>
  <h1 class="text-center">
    <strong>Campos dinamicos para asignar usuarios</strong>
  </h1>
  <hr /><br>

<form action="recib.php" method="POST">

  <div class="row text-right">
    <div class="col-md-12">
      <button class="btn add-btn btn-info">+</button>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-3">
      <label>Proyecto</label>
      <select name="PRODUCTO[]" class="form-control">
        <option value="Pan">Proyecto1</option>
        <option value="Harina">Proyecto2</option>
        <option value="Pasta">Proyecto3</option>
      </select>
    </div>

    <div class="col-md-3">
      <label># ORDEN</label>
      <input type="number" name="NUMERO_ORDEN[]" class="form-control">
    </div>

    <div class="col-md-3">
      <label>Rol</label>
      <select name="ESTADO[]" class="form-control">
        <option value="ACTIVO">Colaborador</option>
        <option value="INACTIVO">Jefe de Proyecto</option>
      </select>
    </div>
</div>

<div class="newData"></div>

  <div class="row text-center mt-5">
     <div class="col-md-12">
    <input type="submit" class="btn btn-primary" value="Registrar"/>
  </div>
  </div>
  <br>
</form>
</div>
 
<?php include '../includes/footer.php';?>
  <script type="text/javascript">
    $(function () { 
      var i = 1;
      $('.add-btn').click(function (e) {
        e.preventDefault();
          i++;

        $('.newData').append('<div id="newRow'+i+'" class="form-row">'
        
            +'<div class="col-md-6">'
              +'<label># ORDEN</label>'
              +'<input type="number" name="NUMERO_ORDEN[]" value="'+i+'" class="form-control">'
            +'</div>'
            +'<div class="col-md-6">'
              +'<label>Rol</label>'
              +'<select name="ESTADO[]" class="form-control">'
              +'<option value="">Selecciona un estado</option>'
              +'<option value="ACTIVO">Colaborador</option>'
              +'<option value="INACTIVO">Jefe de Proyecto</option>'
              +'</select>'
            +'</div>'
            +'<a href="#" class="remove-lnk" id="'+i+'">Eliminar "'+i+'"</a>'
            +'</div>'
          );  
      });
 

       $(document).on('click', '.remove-lnk', function(e) {
         e.preventDefault();

          var id = $(this).attr("id");
           $('#newRow'+id+'').remove();
        });
 
    });
  </script>
</body>
</html>