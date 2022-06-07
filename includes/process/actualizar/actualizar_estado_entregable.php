<?php
$servername = "localhost";
$database = "u415020159_mantizb";
$username = "u415020159_mantizb";
$password = "Mantizb*#17";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
$id=$_GET["codigo"];
$id_p=$_GET["id_p"];
$estado_entregable=$_GET["estado_entregable"];





if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "UPDATE  archivos set  a_estado_seguimiento = '".$estado_entregable."' where a_id = '".$id."'";
if (mysqli_query($conn, $sql)) {
    echo"<script language ='JavaScript'>";
      echo "location='../../../index.php'";
    echo "</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>