<?php  
   include('funcion.php');
   $miconexion=conectar_bd('', 'senasoft'); 
   $resultado=consulta($miconexion, "select * from especialidad");
   
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/styles.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <title>Registrar tipos de turnos |</title>
</head>
<body>
<?php  
   include('nabvar.php');

?> 
  <div id="div1"  class="container "  >
   
    
   <div class="w3-card-4">
     <div id="div2" class="container">
       <h2>Registro del Personal</h2>

     </div>                   
        <form  method="post"  action="guardar_personal.php" class="container"> 
   

       <div class="w3-col ">
         <label class="label">Nombre y Apellido </label>
         <input class="form-control"  style="text-transform: uppercase;" type="text" name="nombre" id="nombre" value="" placeholder="Nombres" required/>
       </div>
       <div class="w3-col m8 l6 ">
         <label class="label">Documento</label>
         <input class="form-control"  type="number" name="numdni" id="numdni" min="9999" max="9999999999999" value="" placeholder="Numero de identificación" required/> 
       </div>
       <div class="w3-col ">
         <label class="label">Dirección</label>
         <input class="form-control"  style="text-transform: uppercase;" type="text" name="direccion" id="direccion" value="" placeholder="Dirección" required/>
       </div>
       <div class="w3-col ">
         <label class="label">Teléfono</label>
         <input class="form-control"  style="text-transform: uppercase;" type="text" name="telefono" id="telefono"value="" placeholder="Teléfono" required/>
       </div>
       <div class="w3-col ">
         <label class="label">Email</label>
         <input class="form-control"  style="text-transform: uppercase;" type="email" name="email" id="email" value="" placeholder="Correo electronico" required/>
       </div>
       
       <div class="w3-col ">
          <label class="label">Especialidad</label>
            
          <select class="form-select" name="especialidad" id="especialidad">
            <?php
              if ($resultado>0)
              {
                while ($rol = $resultado->fetch_array(MYSQLI_ASSOC)){   
                  ?>
                    <option value="<?php echo $rol['id_especialidad']; ?>"> <?php echo $rol['nom_especialidad'] ?></option>
                  <?php 
                   }
                   
                  }
                   ?>
                  
                    </select> 
        </div>
      

<br>

<div class="d-grid gap-2 d-md-block">
<button class="btn btn-primary btn-lg" name="guardar" id="guardar" >Registrar</button>
<a class="btn btn-primary btn-lg" href="inicio.php" role="button">Cancelar</a>

</div>

       <br>
         
     </form>


   

</body>
</html>
