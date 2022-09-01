
<?php
$servername = "localhost";
$database = "u415020159_mantizb";
$username = "u415020159_mantizb";
$password = "Mantizb*#17";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection


$id=$_GET["id"];
$variable=$_GET["variable"];
$codigo_operacion=$_GET["codigo_operacion"];



if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "DELETE from undad WHERE id_uni='".$id."'  ";
if (mysqli_query($conn, $sql)) {
   

    echo"<script language ='JavaScript'>";
      echo "location='../../../operaciones.php?codigo_operacion=$codigo_operacion'";
    echo "</script>";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>
