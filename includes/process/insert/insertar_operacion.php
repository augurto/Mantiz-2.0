<?php
$servername = "localhost";
$database = "u415020159_mantizb";
$username = "u415020159_mantizb";
$password = "Mantizb*#17";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

$nombre_tipo=$_GET["descripcion"];
$material=$_GET["material"];
$monto=$_GET["monto"];
$cantidad=$_GET["cantidad"];
$cant_monto=$monto*$cantidad;
$tipo_operacion=$_GET["tipo_operacion"];
$fecha_operacion=$_GET["fecha_operacion"];
$observacion=$_GET["observacion"];
$cod_operacion=$_GET["cod_operacion"];

date_default_timezone_set("America/Lima");
$hoy = date("Y-m-d H:i:s");
$usuario=$_GET["id_usuario"];


if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO operaciones (descripcion,nombre_operacion, fecha_agregada, fecha_operacion, usuario_maker_operacion, tipo_operacion, cantidad, monto, cant_monto, proyecto_operacion, observaciones, estado_operacion) 
VALUES ('$nombre_tipo','$material','$hoy','$fecha_operacion','$usuario','$tipo_operacion','$cantidad','$monto','$cant_monto','$cod_operacion','$observacion','0')";
if (mysqli_query($conn, $sql)) {
    echo"<script language ='JavaScript'>";
      echo "location='../../../operaciones.php?codigo_operacion=$cod_operacion'";
    echo "</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>