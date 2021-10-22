
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
  <title>Registrar Especialidad |</title>
</head>
<body>
<?php  
   include('nabvar.php');

?> 
  <div id="div1"  class="container "  >
   
    
   <div class="w3-card-4">
     <div id="div2" class="container">
       <h2>Registro de Especialidad</h2>

     </div>                   
        <form  method="post"  action="guardar_especialidad.php" class="container"> 
   

       <div class="w3-col ">
         <label class="label">Nombre de Especialidad </label>
         <input class="form-control"  style="text-transform: uppercase;" type="text" name="nombre" id="nombre" value="" placeholder="Nombres" required/>
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
