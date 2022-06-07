<?php
$entregable=$_GET["entregable"];
$proyecto=$_GET["proyecto"];
If (unlink('../../../archivos/'/$proyecto.'/'.$entregable.'')) {
  // file was successfully deleted
  echo 'archivo eliminado';
} else {
  // there was a problem deleting the file
  echo 'archivo no eliminado';
}
?>