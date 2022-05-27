<?php
$servername = "localhost";
$database = "u415020159_mantizb";
$username = "u415020159_mantizb";
$password = "Mantizb*#17";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
$codigo_proyecto=$_GET["codigo"];
$id_entregable=$_GET["id_entregable"];
$descripcion=$_GET["descripcion"];
$id_miembro=$_GET["id_miembro"];
$link=$_GET["link"];
$nombre_entregable=$_GET["nombre_entregable"];
$usuario_seguimiento=$_GET["nombre_usuario"];

$nombre_documento=$_FILES['documento']['name'];
$guardado=$_FILES['documento']['tmp_name'];


$fecha=$_GET["fecha"];

$direccion=$_GET["id_p"]; /* codigo de proyecto */
$carpeta='../../../entregables/'.$codigo_proyecto.'/'.$nombre_entregable;



 
echo "Connected successfully";


 


/* $carpeta='archivos/proyectos/'.$direccion; */
$sql = "INSERT INTO archivos (codigo_proyecto, documento,id_seg,descripcion,id_miembros,link,usuario,estado_seguimiento)
VALUES ('$codigo_proyecto', '$nombre_documento','$id_entregable','$descripcion','159','$link','$usuario_seguimiento','0')";

if (mysqli_query($conn, $sql)) {

    if(!file_exists($carpeta)){
        mkdir($carpeta,0777,true);
        if(file_exists($carpeta)){
            if(move_uploaded_file($guardado, $carpeta.'/'.$nombre_documento)){
                echo "Archivo guardado con exito";
            }else{
                echo "Archivo no se pudo guardar";
            }
    
        }
    }else{
        if(move_uploaded_file($guardado, $carpeta.'/'.$nombre_documento)){
        
            echo "Archivo guardado con exito";
        }else{
            echo "Archivo no se pudo guardar o no seleciono ningun archivo";
        }
    }
    /* header("Location: ver_entregables.php?var1=$direccion"); */
    header("Location: ../../../entregables.php?id_p=$codigo_proyecto");
    exit;
    
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>




