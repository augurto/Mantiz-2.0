<?php 
$uno=mysqli_query($con,"SELECT * FROM users where id='".$id_usuario."'");
$dos=mysqli_fetch_array($uno);
$tipo_user=$dos['tipo_user'];

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">Logo Mantiz</a>
  <a class="navbar-brand" href="#">Bienvenido <?php echo $usuario;?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Proyectos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../inventario_general.php">Inventario General</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Actualizar Datos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Segmentos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#" >Extension de Proyectos </a></li>
            <li><a class="dropdown-item" href="#">Grupos</a></li>
            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cambiar Rol
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../includes/process/actualizar/cambiar_rol_0.php">Cambiar a administrador</a></li>
            <li><a class="dropdown-item" href="#">Cambiar a Colaborador</a></li>
            <!-- <li><a class="dropdown-item" href="#">Elemento 3</a></li> -->
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../login/logout.php">Salir</a>
        </li>
      </ul>
    </div>
  </div>
</nav>