<?php       
include('funcion.php');
 

  
  $nombre=$_POST['nombre'];

 
  $miconexion=conectar_bd('', 'senasoft');
  $resultado=consulta($miconexion,"INSERT INTO `servicios`( `nom_servicio`) 
  VALUES ('$nombre')");


if ($resultado) 
{
    echo "<script>
    alert('Registro Guardado');
            window.location='registrar_servicios.php?page=otrapagina'
          </script>";
}


?>
