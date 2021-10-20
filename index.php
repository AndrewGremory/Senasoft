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
            $resultado=consulta($miconexion,"select * from usuarios where email_usuario ='$usu' or nom_usuario ='$usu' and
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

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login |</title>
        <link href="css/styles.css" rel="stylesheet" />
<!--         <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
 -->    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">  <strong >INICIO DE SESIÓN</strong></h3></div>
                                    <div class="card-body">
                                    <form id="formulario" method="post" action="">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Usuario</label>
                                                <input class="form-control py-4" type="text" name="usuario" placeholder="ejemplo@ejemplo.com" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Contraseña</label>
                                                <input class="form-control py-4" type="password" name="clave" />
                                            </div>
                                            <div class="form-group">
                                            </div>
                                            <input class="btn btn-primary" type="submit" value="INGRESAR" ><br><br>

                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <div>
                                                <?php echo isset($alert)? $alert:" "; ?>
                                            </div>
                                            </div>
                                        </form>
                                    </div>
                           
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    <!--     <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->

    </body>
</html>


