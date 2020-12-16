<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Excelente!</strong> Su reservación se ha efectuado correctamente.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
    </div>
    <button style="margin: 2px" type="submit" class="btn btn-success" > <a href="{{route('Principal.Principal')}}"></a> Success</button>
    <center>
      <h3>Comprobante de Reservación</h3>
      <section>
        <h3>Topic Restaurante</h3>
        <h6>Merca Santo Domingo, Autopista Duarte Km 22. / 809-335-5656 / topicrestaurante@gmail.com</h6>
      </section>
      <hr/>
      <section>
        
     <div class="row">
       <div class="col s4">
         <h5> <b>Cliente</b></h5>
         <br>
       <h6>{{$informacion->Nombre}}</h6>
       </div>
       <div class="col s4">
        <h5><b>Télefono</b></h5>
        <h6>{{$informacion->Celular}}</h6>
        <br>
        <p></p>
      </div>
      <div class="col s4">
        <h5><b>Correo</b></h5>
        <br>
      <h6>{{$informacion->Email}}</h6>
      </div>
     </div>
      </section>
      
      <section>
        <h4 height="10%">Descripción</h4>
      </section>

      <div class="container">
      <div class="row">
        <div class="col s6 m6">
          <div class="card text-white bg-dark mb-3">
            <div class="card-content white-text">
              
              <p>Damos en constancia de que el cliente {{$informacion->Nombre}}
              ha realizado una previa reservación para el día {{$informacion->Fecha}} <br> en horario
              de las {{$informacion->Hora}}. El restaurante no se hace responsable de que el solicitante se presente<br>
            hora más tarde de lo acordado en la reservación, puesto a qué se procederá a cancelar su reservación <br>
          <br>
             <i>Alls Rights Reserved Topic Restaurante 2020</i></p>
            </div>
            
          </div>
        </div>
      </div>
      </div>

            <button type="button" class="btn btn-danger" onclick="window.print();">Descargar Comprobante</button>
        
            
  
    </center>


  

  
    

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>