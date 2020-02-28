<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <link href="{{ asset('//css/index.css') }}" rel="stylesheet">
        <link href="{{ asset('//css/navbar.css') }}" rel="stylesheet">
        <!--Slick-->
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

        <!--Externals-->
        <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Fonts -->
        <link href="//fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="//kit.fontawesome.com/0de3fe663e.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark back sticky-top">
            <a class="navbar-brand" href="/">The three elements</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/">Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/jugar">Juega</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="/explora">Explora</a>
                  </li>
                  <!--<li class="nav-item">
                    <a class="nav-link" href="#">Sobre nosotros</a>
                  </li>-->
              </ul>
              <div class="collapse navbar-collapse d-flex justify-content-end">
                <button class="btn btn-outline-succes my-2 my-sm-0"><a style="text-decoration:none" href="/Login">Ingresar</a></button>
                <button class="btn btn-outline-succes my-2 my-sm-0"><a href="/Registro">Registrarse</a></button>
                <!--<form class="form-inline my-2 my-lg-0">
                    <input style="display: none" class="form-control mr-sm-2" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"> </i></button>
                </form>-->
            </div>
            </div>
          </nav>

          @yield('content')

          <!-- Footer -->
    <footer class="page-footer font-small blue-grey lighten-5">

        <div style="background-color: #21d192;">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 col-lg-7 text-center text-md-left">
                    <!-- Facebook -->
                    <a class="fb-ic">
                    <i class="fab fa-facebook-f white-text mr-4"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                    <i class="fab fa-twitter white-text mr-4"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                    <i class="fab fa-google-plus-g white-text mr-4"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                    <i class="fab fa-linkedin-in white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                    <i class="fab fa-instagram white-text"> </i>
                    </a>
                </div>
            </div>
        </div>
        </div>

        <div class="container text-center text-md-left mt-5">
            <div class="row dark-grey-text d-flex justify-content-center">
                <div class="col-md-3 text-center">

                <h6 class="text-uppercase font-weight-bold">Nuestros nombres</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Maricruz Alvarado Corpus</p>
                <p>Fernando Gomez Pizaña</p>

                </div>
                <div class="col-md-3 text-center">

                    <h6 class="text-uppercase font-weight-bold">Logo del juego</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Indefinido :(</p>

                </div>
            </div>
        </div>
        <br>
        <div class="text-center">Todas las imagenes usadas por el momento estan sujetas a cambio</div>
        <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
        <a class="dark-grey-text" href="//mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
    </footer>
    <script src="{{ asset('//js/app.js') }}" defer></script>
    <script src="//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
