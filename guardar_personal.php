<?php       
include('funcion.php');
$miconexion=conectar_bd('', 'senasoft'); 

  $vguardar=$_POST['guardar'];
  if($vguardar==1){
    $nombre=$_POST['nombre'];
    $numdni=$_POST['numdni'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $rol=$_POST['rol'];
 
  

  $resultado=consulta($miconexion,"INSERT INTO `personal`( `nom_personal`, `docu_personal`,`email_personal`, `tfl_personal`, `direc_personal`, `id_espec_personal`) 
  VALUES ('$nombre','$numdni',' $direccion',' $telefono','$email','$rol')");


}


?>

