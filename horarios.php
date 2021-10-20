<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>horario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/moment.min.js"></script>

    <link rel="stylesheet" href="estilos.css">


 <!-- full calendar -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <script src="js/fullcalendar.js"></script>
    <script src="js/es.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
    <header>
        <br>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <h1 href="inicio.php">Servicio 

                    <button type="button" class="btn btn-outline-dark">Renombrar</button>
                    <button type="button" class="btn btn-outline-dark">Eliminar</button>

                </h1>
                
                
            </div>
           
        </nav>
    </header>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-7"> <div id="CalendarioWeb"></div> </div>
            <div class="col"></div>
        </div>
    </div>


<script>
    $(document).ready(function(){
        $('#CalendarioWeb').fullCalendar();
    }),
    businessHours:[ // specify an array instead
  {
    daysOfWeek: [ 1, 2, 3 ], // Monday, Tuesday, Wednesday
    startTime: '08:00', // 8am
    endTime: '18:00' // 6pm
  },
  {
    daysOfWeek: [ 4, 5 ], // Thursday, Friday
    startTime: '10:00', // 10am
    endTime: '16:00' // 4pm
  }
]
        
    ;

</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>  


    
</body>
</html>