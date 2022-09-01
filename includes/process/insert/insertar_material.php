<?php
$servername = "localhost";
$database = "u415020159_mantizb";
$username = "u415020159_mantizb";
$password = "Mantizb*#17";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

$nombre_tipo=$_GET["nombre_material"];
$unidad=$_GET["unidad"];
$cod_operacion=$_GET["cod_operacion"];

$usuario=$_GET["usuario"];
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO materiales (nombre_material, id_unidad, estado_material) VALUES ('$nombre_tipo', '$unidad', '0')";
if (mysqli_query($conn, $sql)) {
    echo"<script language ='JavaScript'>";
      /* echo "window.history.go(-2);"; */
      echo "location='../../../operaciones.php?codigo_operacion=$cod_operacion'";
    echo "</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>