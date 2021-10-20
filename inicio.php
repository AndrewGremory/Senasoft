<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css"/>
    <title>Inicio |</title>
</head>
<body>
    <div class="topnav">
    <a class="active" href="#home">Home</a>
 
    </div>

    <div style="padding-left:16px">
    <button class="button" style="vertical-align:middle" onclick="document.getElementById('id01').style.display='block'"><span>Agregar Servicio </span></button><hr>
    <div class="contenido">
        <center><div class="contenido-b">
        <button class="button" style="vertical-align:middle"><span>Radioterapia </span></button>
        <button class="button" style="vertical-align:middle"><span>Reumatología </span></button>
        <button class="button" style="vertical-align:middle"><span>Agregar Servicio </span></button>
        <button class="button" style="vertical-align:middle"><span>Agregar Servicio </span></button>
        <button class="button" style="vertical-align:middle"><span>Agregar Servicio </span></button>
        <button class="button" style="vertical-align:middle"><span>Agregar Servicio </span></button>
        <button class="button" style="vertical-align:middle"><span>Agregar Servicio </span></button>
        <button class="button" style="vertical-align:middle"><span>Agregar Servicio </span></button>
        <button class="button" style="vertical-align:middle"><span>Agregar Servicio </span></button>
        <button class="button" style="vertical-align:middle"><span>Agregar Servicio </span></button>
        <button class="button" style="vertical-align:middle"><span>Agregar Servicio </span></button>
        <button class="button" style="vertical-align:middle"><span>Agregar Servicio </span></button>



                

        </div></center>
    </div>

    <container id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">X</span>
        <center><div class="modal-content animate" >
          <form id="forma" name="forma" method="POST">
            <div class="contenido">
              <br>
              <label class="textos1" for="usuario">Servicio</label><br>
              <input class="textos2" type="text" id="usuario"  placeholder="Nombre del servicio" name="numero-usuario" required="true"/><br><br>
                <button type="submit" name="guardar" value="1">Agregar</button>
                <button type="submit" name="guardar" value="2">cancelar</button>
          </form>
        </div></center>
    </container>

</body>

<?php      
if ($_SERVER['REQUEST_METHOD']==='POST') { 
  /* Activar alerta */
  echo "<script src='jquery/jquery-3.3.1.min.js'></script>";
  echo "<script src='popper/popper.min.js'></script>";	 	 	
  echo "<script src='bootstrap4/js/bootstrap.min.js'></script>";
  echo "<script src='plugins/sweetAlert2/sweetalert2.all.min.js'></script>";
  echo "<script src='codigo.js'></script>"; 

  $vguardar=$_POST['guardar'];
  $miconexion=conectar_bd("", 'senasoft');
  if($vguardar==1){
 
  $tipod_usuario=$_POST['tipoid'];
  $numero_usuario=$_POST['numero-usuario'];

  $resultado=consulta($miconexion,"INSERT INTO `registro`(`tipo_id`, `numero_id`) 
  VALUES ('$tipod_usuario','$numero_usuario')");


}
if($vguardar==2){
  $numero_usuario=$_POST['numero-usuario'];
  $resultado=consulta($miconexion,"SELECT * FROM `registro` WHERE `numero_id` like '$numero_usuario' ");
  $fila0=$resultado->fetch_object(); 
  $valor=$fila0->id;
echo"--------------------------------------------------------------------------------------------".$valor;

  $resultado=consulta($miconexion,"DELETE FROM `registro` WHERE id like'$valor'");
  

}
}?>

</html>