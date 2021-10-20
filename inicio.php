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
        <div class="modal-content animate" >
          <form id="forma" name="forma" method="POST">
            <div class="contenido">
              <br>
              <label class="textos1" for="usuario">Tipo de documento</label>
      
                  <select  class="textos2" name="tipoid" required="true">
                  <option id=""value=" " selected>Tipo de documento </option>                         
                  <option id=""value="CC" selected>Cédula de Ciudadanía </option>                          
                  <option id=""value="TI">Tarjeta de Identidad</option>                       
                  <option id=""value="RC">Cédula de Extranjería</option>                         
                  <option id="" value="PA">Pasaporte</option>                      
              </select>
              
      
      
           
                      <label class="textos1" for="usuario">Número de documento</label>
                      <input class="textos2" type="text" id="usuario"  placeholder="Ingrese su usuario" name="numero-usuario" required="true"/>
                
                 <button type="submit" name="guardar" value="1">guardar</button>
                 <button type="submit" name="guardar" value="2">eliminar</button>
          </form>
        </div>
    </container>
</body>
</html>