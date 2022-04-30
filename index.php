<?php
require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Mantiz</title>
</head>
<body>


    <?php include 'includes/header.php';?>
    <!-- Inicio de Graficas -->

    <!-- Content Row -->
    <div class="row">
            
            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Estadistica de presupuesto</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Estadistica</h6>
            
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-warning"></i> Activo
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-danger"></i> Inactivo
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Terminado
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
    <!-- Fin de graficas -->

    <!-- Contenido de la tabla -->
    <div style="height:50px"></div>
        <!--Ejemplo tabla con DataTables-->
    <div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        
                         <thead style="background-color: transparent !important;">
                           <tr>
                           
                           <th>Usuario</th>
                           <th>Proyecto</th>
                           <th>Entregables</th>
                           <th>Documento</th>
                           
                           <th>Estado</th>
                           <th>Fecha de entrega</th>
                              
                           </tr>
                         </thead>
                         <tbody>
                       <?php
                       $count=1;
                       $id_obrass=$_GET["id"];
                        $sql_obra="SELECT * FROM seguimientos s inner join entregables  e  on s.codigo_proyecto= e.codigo_proyecto INNER JOIN proyecto p on p.codigo = e.codigo_proyecto  where estado_seguimiento IN ('Observado','Pendiente') ";
                          $query = mysqli_query($con, $sql_obra);
                              while ($row=mysqli_fetch_array($query)){
                               $id=$row['id'];
                               
                               $usuario=$row['usuario'];
                               $documento=$row['codigo_proyecto'];
                                   $nombre_proyecto=$row['nombre'];
                                   $nombre_proyecto2=$row['nombre_proyecto'];
                                   $estado=$row['estado_seguimiento'];
                                   $unidad=$row['unidad'];
                                   $presupuesto=$row['presupuesto'];
                                   $fecha_agregado=$row['fecha_entrega'];
                                   $subtotal2=array_product($row['precio'],$row['cantidad']);
                                   $id_obra=$row['id_obra_mat'];
                                   $usuario_ob=$row['usuario_mat_obras'];
                                        
                              
                           ?>
                           
                           
                           
                           <tr><input type="hidden" value="<?php echo $programa;?>" id="programa<?php echo $id;?>">
                           <input type="hidden" value="<?php echo $estado;?>" id="estado<?php echo $id;?>">
                            
                               <td><?php echo $usuario; ?></td>
                                <td><?php echo $nombre_proyecto2;?></td>
                               <td><?php echo $nombre_proyecto; ?></td>
                             <td><?php echo $documento;?></td>
                             
                                
                             <td><?php echo $estado; ?></td>
                          
                             <td><?php echo $fecha_agregado; ?></td>
                              
                           </tr>
                           <?php
                       }
                       ?>
                       
                   </tbody>
                             
                       </table>                  
                    </div>
                </div>
        </div>  
    </div>    
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
</body>
</html>