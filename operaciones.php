<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login/");
    exit;
}
require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
        $usuario=$_SESSION["username"];
        $id_usuario=$_SESSION["id"];
        
            $codigo_operacion=$_GET['codigo_operacion'];
        
        
        $valor1='Material';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- incluyendo script para editar en tiempo realpat -->

    
    <!-- fin -->
    <!-- incluyendo bootstrap -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <!-- inicio datatables -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  

    <!-- fin datatable -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Mantiz-Operaciones</title>
</head>
<body>


    <?php include 'includes/header.php';?>
    <div style="height:50px"></div>
    <!-- Inicio de Graficas -->
    <div class="container">
    <div class="row">
      <div class="col">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregar-materiales-obra">
                    <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                    </span>Operacion
                </button>
    </div>
      <div class="col">
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#compromisos">
                    <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                    </span><?php echo $valor1;?>
                </button>
    </div>
        <div class="col">
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#unidad">
                    <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                    </span><?php echo 'Unidad '.$valor1;?>
                </button>
    </div>
     <!--  <div class="col">
        <button id="btnSubmit" class="btn btn-primary form-control btn-block" type="submit" (click)="onSubmit()">Submit</button>
    </div> -->
    </div>
    
  </div>

 <!--    <div class="container">
        <div class="row justify-content-between">
            <div class="col-3">
        
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregar-materiales-obra">
                <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                </span>Agregar Materiales
                </button>
            </div>    
            <div class="col-3" text-rigth>
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#agregar-nuevo-material">
                <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                </span>Registrar Operacion
                </button>

               
       Fin Boton agregar proyecto -->
            </div>     
        </div>    
    </div>
    <br>
                <?php include 'includes/modal/modal_agregar_operacion.php' ?>
                <?php include 'includes/parts/agregar_material.php' ?>
                <?php include 'includes/parts/agregar_unidad.php' ?>
    <input type="hidden" value="<?php echo $_POST['codigo_operacion']?>">
    <!-- Fin de graficas -->
    <!-- Boton agregar proyecto -->
    
    <!-- Fin Boton agregar proyecto -->
    <br>
    <!-- Contenido de la tabla -->
    <?php include 'includes/parts/tabla_ver_obras.php'; ?>
    <!-- Fin del contenido de la tabla -->

  
    <?php  include 'includes/footer.php'?>


    <!-- Inicio de Script para datatables -->

      <!-- jQuery, Popper.js, Bootstrap JS -->
      <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="main.js"></script>   


    <!-- Fin de Script para datatables -->
    <script src="js/proyecto.js"></script>
    <!-- Fin de Script para datatables -->
</body>
</html>