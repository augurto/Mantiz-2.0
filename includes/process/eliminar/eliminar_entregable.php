<?php
$entregable=$_GET["entregable"];
If (unlink('../../../archivos/2/'.$entregable.'')) {
  // file was successfully deleted
  echo 'archivo eliminado';
} else {
  // there was a problem deleting the file
  echo 'archivo no eliminado';
}
?>