<?php
If (unlink('../../../archivos/2/borrar.php')) {
  // file was successfully deleted
  echo 'archivo eliminado';
} else {
  // there was a problem deleting the file
  echo 'archivo no eliminado';
}
?>