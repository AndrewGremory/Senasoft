<?php       
include('funcion.php');
 

  
  $nombre=$_POST['nombre'];

 
  $miconexion=conectar_bd('', 'senasoft');
  $resultado=consulta($miconexion,"INSERT INTO `especialidad`( `nom_especialidad`) 
  VALUES ('$nombre')");


if ($resultado) 
{
    echo "<script>
    alert('Registro Guardado');
            window.location='registrar_especialidad.php?page=otrapagina'
          </script>";
}


?>