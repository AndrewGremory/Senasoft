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
  <title>Document</title>
</head>
<body>
  
<div class="w3-container "  style="width: 100%; padding: 50px 20px ;">
   
    
   <div class="w3-card-4">
     <div class="w3-container w3-blue ">
       <h2>Registro del Personal</h2>
     </div>
       <form  method="post"  action="guardar_personal.php" class="w3-container"> 
       <p>        
       <br> 
       <br>
       <div class="w3-col ">
         <label class="label">Nombre y Apellido </label>
         <input class="w3-input w3-border"  style="text-transform: uppercase;" type="text" name="nombre" id="nombre" value="" placeholder="Nombres" required/>
       </div>
       <div class="w3-col m8 l6 ">
         <label class="label">Documento</label>
         <input class="w3-input w3-border"  type="number" name="numdni" id="numdni" min="9999" max="9999999999999" value="" placeholder="Numero de identificación" required/> 
       </div>
       <div class="w3-col ">
         <label class="label">Dirección</label>
         <input class="w3-input w3-border"  style="text-transform: uppercase;" type="text" name="direccion" id="direccion" value="" placeholder="Dirección" required/>
       </div>
       <div class="w3-col ">
         <label class="label">Teléfono</label>
         <input class="w3-input w3-border"  style="text-transform: uppercase;" type="text" name="telefono" id="telefono"value="" placeholder="Teléfono" required/>
       </div>
       <div class="w3-col ">
         <label class="label">Email</label>
         <input class="w3-input w3-border"  style="text-transform: uppercase;" type="email" name="email" id="email" value="" placeholder="Correo electronico" required/>
       </div>
       
       <div class="w3-col ">
          <label class="label">Especialidad</label>
            
          <select class="w3-select" name="rol" id="rol">
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
<br>
<br>
       <div class="w3-row-padding">
 <div class="w3-half"> 
 <a  href="propietarios.php" class="w3-button w3-blue" style="width:100% "> Cancelar</a>
 </div>
 <div class="w3-half">
 <button class="w3-bar-item w3-button w3-blue" style="width:100%" type="submit" name="guardar" value="1">Registrar</button>

 </div>
</div>

       <br>
         
     </form>


   

</body>
</html>