<?php       
include('funcion.php');
 

  
  $nombre=$_POST['nombre'];
  $numdni=$_POST['numdni'];
  $direccion=$_POST['direccion'];
  $telefono=$_POST['telefono'];
  $email=$_POST['email'];
  $especialidad=$_POST['especialidad'];
 
  $miconexion=conectar_bd('', 'senasoft');
  $resultado=consulta($miconexion,"INSERT INTO `personal`( `nom_personal`, `docu_personal`,`email_personal`, `tfl_personal`, `direc_personal`, `id_espec_personal`) 
  VALUES ('$nombre','$numdni',' $direccion',' $telefono','$email','$especialidad')");


if ($resultado) 
{
    echo "<script>
    alert('Registro Guardado');
            window.location='registrar_personal.php?page=otrapagina'
          </script>";
}


?>

