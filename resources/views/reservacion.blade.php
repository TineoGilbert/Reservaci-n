<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     
    

     

    <title>Reservación</title>
</head>
<body>

  <script>alert(' TOPIC RESTAURANTE: Por Favor, verificar bien su Información antes de enviar su Reservación. Alls Rights Reserved 2020')</script>

    <nav>
        <div class="nav-wrapper grey darken-4">
          <div class="container">
            <a href="#" class="brand-logo">Topic Restaurante</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="#">Información</a></li>
              <li><a href="#">Components</a></li>
              <li><a href="#">Sugerencias</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <center>
        <h5>Área de Reservación</h5>
        <h6>Merca Santo Domingo, Autopista Duarte Km 22.</h6>

      </center>
      
       
      <div class="row">
          <div class="col s6">
            <button class="btn waves-effect waves-light red darken-1" type="submit" name="action"
            onclick="window.print();">Descargar Comprobante
               <i class="material-icons right">picture_as_pdf</i>
              </button>
          </div>
      </div>
      
<form action="{{ route('reservaciones.store')}}" method="post">
    @csrf
      <div class="container section">
        @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                    <li>
                      {{$error}}
                    </li>
                @endforeach
              </ul>
            </div>
        @endif
            <div class="row">
                <div class="input-field col s4">
                  <input value="" id="first_name2" type="text" class="validate" name="nombre">
                  <label class="active" for="first_name2">Nombre</label>
                </div>
                <div class="input-field col s4">
                    <input value="" id="first_name3" type="text" class="validate" name="apellido">
                    <label class="active" for="first_name3">Apellido</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="email" type="email" class="validate" name="mail">
                    <label for="email">Email</label>
                    <i class="material-icons">email</i>
                  </div>
                  <div class="input-field col s4">
                    <input type="text" class="datepicker" name="fecha">
                    <label for="fecha">Fecha</label>
                    <i class="material-icons">date_range</i>
                  </div>
                  <div class="input-field col s4">
                    <input type="text" class="timepicker" name="hora">
                    <label for="fecha">Hora</label>
                    <i class="material-icons">query_builder</i>
                  </div>
                  <div class="input-field col s4">
                    <input type="number" class="active" name="personas">
                    <label for="fecha">Cantidad de personas</label>
                    <i class="material-icons">person</i>
                  </div>
                  <div class="input-field col s6">
                    <label class="active" for="">Mesas Disponibles</label>
                    <select name="mesas" >
                  
                      <option value="1A" >Mesa 1A</option>
                      <option value="2B" >Mesa 2B</option>
                      <option value="3C" >Mesa 3C</option>
                      <option value="4D" >Mesa 4D</option>
                      <option value="5E" >Mesa 5E</option>
                      <option value="6F" >Mesa 6F</option>
                      <option value="7G" >Mesa 7G</option>
                    </select>
                    <i class="material-icons">table</i>
                    
                    
                    
                  </div>
                  <div class="input-field col s6">
                    <input type="number" class="active" name="cel">
                    <label for="fecha">Celular</label>
                    <i class="material-icons">phone_iphone</i>
                  </div>


                  <center>

                    <div class="col s12">
                        <button class="btn waves-effect waves-light green accent-3 " type="submit" name="action">Reservar
                            <i class="material-icons right">send</i>
                          </button>
                      </div>
                  </center>
                 
              </div>
              
              
      </div>
    </form>
 





    
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  
  <script>
     document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });

  </script>


  <script>
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems);
  });
  </script>

  <script>
       document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.timepicker');
    var instances = M.Timepicker.init(elems);
  });
  </script>

  <script>
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });

  </script>


</body>
</html>