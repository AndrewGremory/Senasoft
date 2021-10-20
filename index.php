<?php 
$alert ='';
session_start();
if(!empty($_SESSION['active']))
{
    header('location:inicio.php');
}

else{ 
    if(!empty($_POST))
    {
        if(empty($_POST['usuario']) || empty($_POST['clave']))
        {
            $alert = 'Ingrese su usuario y contraseña'; 
        } else{
            require_once "funcion.php";
            $usu = $_POST['usuario'];
          
            $clav =$_POST['clave'];
            

            $miconexion=conectar_bd('', 'senasoft');
            $resultado=consulta($miconexion,"select * from usuarios where email_usuario ='$usu' and
            contra_usuario='$clav'");
            $row= $resultado->fetch_array(MYSQLI_ASSOC);

            if($resultado->num_rows>0){
                
                $_SESSION['active']=true;
                $_SESSION['idusuario']=$row['id_usuario'];
                $_SESSION['nomusu']=$row['nom_usuario'];
                $_SESSION['docusu']=$row['docu_usuario'];
                $_SESSION['apeusu']=$row['ape_usuario'];
                $_SESSION['email']=$row['email_usuario'];
                $_SESSION['rol']=$row['id_rol_usu'];

                header('location:inicio.php');
            }
        
        else
        {
            $alert = 'El usuario o la contraseña son incorrectos';
            session_destroy();
        }
    }  
}

 }



 
?>



<!doctype html>
<html>
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

    <body>  
        <div id="div1"  >
            <div class="titulo">
                <strong >INICIO DE SESIÓN</strong>
             </div>
            <div id="div2">
                <form id="formulario" method="post" action="">
                   
                    <label >Usuario</label>
                    <br>
                    <input  type="text" name="usuario" placeholder="ejemplo@ejemplo.com"/>
                    <br>
                    <label >Contraseña</label>
                    <br>
                    <input  type="password" name="clave" />
                    <br>
                    <div><?php echo isset($alert)? $alert:" "; ?></div>
                 
            </div> 
            <input class="btn " type="submit" value="INGRESAR" ><br><br>
                </form>
        </div>
         
    </body>
</html>





