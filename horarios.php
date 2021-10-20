<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>horario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/moment.min.js"></script>


 <!-- full calendar -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <script src="js/fullcalendar.min.js"></script>

</head>
<body>
    <div class="header">
        <header>
        <h2>Nombre de servicio
        <button>Renombrar</button>
        <button>Eliminar</button>
        </h2>
        </header>
    </div>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-7"> <div id="CalendarioWeb"></div> </div>
            <div class="col"></div>
        </div>
        <h3 style="text-align: center">Mes / Año</h3>
    </div>


<script>
    $(document).ready(function(){
        $('#CalendarioWeb').fullCalendar();
    });

</script>


    
</body>
</html>