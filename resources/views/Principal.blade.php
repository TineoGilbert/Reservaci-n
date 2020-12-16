<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <title>Restaurante</title>
</head>

<body>

    <!--Barra de Navegación-->
    <nav class="navbar navbar-expand-lg navbar-dark gris scrolling-navbar fixed-top">

        <div class="container">

            <a class="navbar-brand" href="#">길버트</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('reservaciones.create')}}">Reservación</a>
                    </li>


                </ul>

                <!-- Iconos Redes Sociales -->
                <ul class="navbar-nav nav-flex-icons">

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item-i">
                        <a href="#" class="nav-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item-t">
                        <a href="#" class="nav-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item-y">
                        <a href="#" class="nav-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
                <!-- Final Iconos de Redes Sociales-->

            </div>
        </div>
    </nav>

    <!-- Final Barra de Navegación-->



    <!--Sección Principal de la Página-->
    <section class="fondo view">
        <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-white">
                        <h1 class="h1-responsive text-center text-ms-left">Topic Restaurante</h1>
                        <hr class="bg-light">
                        <p class="h4-responsive text-center text-ms-left ">Topic Restaurante es un lugar que ofrece
                            una gran variedad de platos gástronomicos, brindandole al cliente un servicio
                             de calidad optimo en cada uno de sus gustos.
                            </p>

                        <div class="text-center text-ms-left">

                            <button id="sugerencia" onclick="sugerencias()" type="button"
                                class="btn btn-outline-warning">Sugerencias
                                <i class="fas fa-utensils ml-2"></i>
                            </button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <b class="modal-title" id="exampleModalLabel"><b>Hoja de Reclamación</b>
                                                </h2>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <h4><label for="recipient-name" class="col-form-label"><b>Nombre o
                                                                Email:</b></label></h4>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="form-group">
                                                    <h4><label for="message-text"
                                                            class="col-form-label"><b>Mensaje:</b></label></h4>
                                                    <textarea class="form-control" id="message-text"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-success">Enviar Reclamación</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Final de Sección de la Página Principal-->

    <section class="reseña">
        <div class="mask rgba-white-light d-flex justify-content-center align-items-center">
            <center>
                <div class="container">

                    <div class="col-md-6 text-white">
                        <br>
                        <h1 class="h1-responsive text-center text-ms-left" style="color: black;"> Quienes Somos?</h1>
                        <hr class="bg-light">
                        <p class="animate__backInLeft h4-responsive text-center text-ms-left" style="color: black;">
                            Somos un Restaurante con unos de los mejores estandares de calidad
                            en lo que se refiere al trato a nuestros clientes, El ambiente y cada uno
                            de nuestros platos.
                            </p>


                        <div class="text-center text-ms-left">
                            <button id="somos" type="button" class="btn btn-outline-dark">

                                <i class="fas fa-globe-africa ml-3"></i>
                                <i class="fas fa-utensils ml-3"></i>
                                <i class="fas fa-glass-cheers ml-3"></i>
                                <i class="far fa-star ml-3"></i>
                            </button>


                        </div>
                    </div>

                </div>
            </center>
        </div>
    </section>



    <!--Inicio del Slider-->

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="height:100vh">
                <img src="img/Siler-1.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Calidad</h3>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item" style="height:100vh">
                <img src="img/slider-2.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Degustación</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item" style="height:100vh">
                <img src="img/siler-3.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Ambiente</h3>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!--Final del Slider-->


    <!--Inicio de la Sección de Platos Principales-->

    <div class="container">
        <div class="platos">
            <br>
            <h2>Platos Principales</h2>
        </div>
        <br>
        <div class="card-deck">
            <div class="card">
                <img src="img/lomo.jpg" class="card-img-top" alt="Lomo">
                <div class="card-body">
                    <h5 class="card-title">Lomo al Ajillo</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="img/pollo.jpeg" class="card-img-top" alt="Sushi">
                <div class="card-body">
                    <h5 class="card-title">Pollo</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card">
                <img src="img/spague.jpeg" class="card-img-top" alt="Spaget">
                <div class="card-body">
                    <h5 class="card-title">Ramen</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This card has even longer content than the first to show that equal height
                        action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>


    <!--Fin de la Seccion de Platos Principales-->


    <!--Seccion de Reservación-->

    <div class="container">
        <br>
        <div class="card-reservacion text-center">
            <div class="card-header">
                Reservación
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <i class="fas fa-arrow-down"></i>
                <p class="card-text">Las reservaciones se hacen con 2 días de anticipación.</p>
                <button id="reserva" onclick="reserva()" type="button" class="btn btn-outline-warning">Reservar <i
                        class="fas fa-wine-glass-alt ml-2"></i></button>
                <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="@mdo">Reclamación</button>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>

    </div>

    <!--Final de Sección de Reservación-->

    <br>
    <!--Footer -->

    <footer class="pie">

        <i id="email" class="far fa-envelope ml-10"></i>


        <i style="color: blanchedalmond;">©Alls Rights Reserved Topic Restaurante 2020</i>

        <i id="phone" class="fas fa-phone-square-alt"></i>

    </footer>


    <!--Final del Footer-->



    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <!--Link de Font Awesome (kit Personal Perteneciente a Gilbert Tineo, Usar kit Personal en caso de usar esta Páhina web)-->
    <script src="https://kit.fontawesome.com/d01099666b.js" crossorigin="anonymous"></script>
    <!-- Alertify (Alertas)-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script src="js/alertas.js"></script>
</body>

<!-- Esta página fue creada por Gilbert E. Tineo - 18/08/2020
Nota: Está disponible para uso personal y para uso didáctico. En caso de querer usar esta página
por favor contactarse al correo: tineogilbert@gmail.com!
-->
</html>