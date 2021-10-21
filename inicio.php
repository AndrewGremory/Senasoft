<?php 
  include('funcion.php'); 
  $miconexion=conectar_bd('', 'senasoft'); 
  $resultado=consulta($miconexion,"select * from especialidad"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css"/>
     <!-- Bootstrap core CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <title>Inicio |</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               nombre del usuario
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="cerrar_sesion.php">Cerrar Sesión</a>
                <a class="dropdown-item" href="registrar_personal.php">Registro Personal</a>
                <a class="dropdown-item" href="registrar_titurnos.php">Registro Tipo Turno</a>
                <a class="dropdown-item" href="registrar_rol.php">Registro Usuario</a>
                <a class="dropdown-item" href="Registrar_especialidad.php">Registro Especialidad</a>
                <a class="dropdown-item" href="Registrar_rol.php">Registro Rol</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

    <div style="padding-left:16px  ">
    <a class="button" style="vertical-align:middle" href="registrar_especialidad.php"><span>Registrar Especialidad </span></a><hr>
   
    <div class="contenido">
      
        <center><div class="contenido-b">
        <?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC))
              { 
              
                ?>

        <button class="button" style="vertical-align:middle"><span><?php echo $row['nom_especialidad']; ?> </span></button>
        

        <?php } ?>

                

        </div></center>
    </div>
      <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
