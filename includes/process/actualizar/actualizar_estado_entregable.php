<?php
$servername = "localhost";
$database = "u415020159_mantizb";
$username = "u415020159_mantizb";
$password = "Mantizb*#17";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
$id=$_GET["id"];
$id_p=$_GET["id_p"];
$estado_entregable=$_GET["estado_entregable1"];
$hoy = date("Y-m-d H:i:s"); 




if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "UPDATE  archivos set  a_estado_seguimiento = '".$estado_entregable."' where a_id = '".$id."'";
/* $sql = "UPDATE  users set  tipo_user = '1' where id = '".$id_users."'"; */
if (mysqli_query($conn, $sql)) {
      $sql2 = "INSERT  auditoria (valor1, valor2, valor3, fecha_modificacion, tipo_dato, usuario, proyecto) VALUES ('$id','$id_p','$estado_entregable', '$hoy', 'Actualizacion de entregables','Ego Preuba', 'Proyecto prueba' ) ";
    echo"<script language ='JavaScript'>";
      echo "location='../../../entregables.php?id_p=$id_p'";
    echo "</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>