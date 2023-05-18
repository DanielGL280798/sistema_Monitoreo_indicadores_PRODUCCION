<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Indicadores </title>
    <link rel="icon" href="{{asset('images/dashboard/LogoP.png')}}">


    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8e6f818342.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{asset('css/css-dashborad/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('css/css-dashborad/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- kit icons font awesome -->
    <script src="https://kit.fontawesome.com/0b5b2fc52f.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{asset('css/css-dashborad/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
    <link href="{{asset('css/css-dashborad/preloader.css')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="g-sidenav-show  bg-gray-200">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <header class="header_area">
        <nav class="navbar navbar-expand-lg menu_one support_menu">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="https://pagos.tulancingo.gob.mx/images/citizen/payments/logo.png" srcset="https://pagos.tulancingo.gob.mx/images/citizen/payments/logo2x.png 2x" alt="logo"></a>
                <!--Navbar-->
                <nav class="navbar navbar-light navbar-9 white">
                    <!-- Navbar brand -->
                    <!-- Collapse button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span
                          class="navbar-toggler-icon"></span></button>
                    <!-- Collapsible content -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent15">
                        <!-- Links -->
                        <ul class="nav nav-tabs mr-auto">

                            @guest
                            <li class="nav-item ">
                                <a class="nav-link {{ Route::is('login') ? 'active bg-success text-white' : '' }}" aria-current="page" href="{{route('login')}}"><i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar sesión</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ Route::is('register') ? 'active bg-success text-white' : '' }}" aria-current="page" href="{{route('register')}}"><i class="fa fa-pencil-square-o"></i> Crear Cuenta</a>

                            </li>

                            @else
                            <li class="nav-item ">
                                <a class="nav-link {{ Route::is('inicio2') ? 'active bg-success text-white' : '' }}" aria-current="page" href="{{route('inicio2')}}"><i class="fa-solid fa-house-chimney-user"></i> Inicio</a>

                            </li>



                            <li class="nav-item ">
                                <a class="nav-link" aria-current="page" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" href=""><i class="fa fa-sign-out" aria-hidden="true"></i> Salir</a>
                            </li>
                            @endguest

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                        <!-- Links -->
                    </div>
                    <!-- Collapsible content -->
                </nav>
                <!--/.Navbar-->
            </div>
    </header>


    <main class="d-flex justify-content-center">
        @yield('content')
    </main>

    <!--   Core JS Files   -->

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/js-dashboard/preloader.js')}}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    {{--
    <script src="{{asset('js/js-dashboard/material-dashboard.min.js?v=3.0.0')}}"></script>
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/jqueryslidemenu.js"></script>
    <script type="text/javascript" src="js/jquery.prettyphoto.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
    <link rel="stylesheet" href="{{asset('css/slide.css')}}"> --}}

    <style>
        html,
        body {

            background-image: url('{{ asset('images/dashboard/FONDO111.jpg') }}');
            background-repeat: no-repeat;
            background-size: cover;

        }

        /*////////////////// GALERIJA ///////////////////////*/
        .items-wrapper {
            padding-bottom: 40px;
            padding-left: 20px;
        }

        .items-wrapper.clearfloat h2 {
            margin-right: 20px;
            font-family: Helvetica, Arial, Sans-serif;
            background-image: url(voda.jpg);
            background-repeat: no-repeat;
            background-position: left 15px;
            margin: 0;
            padding-top: 20px;
            padding-right: 0;
            padding-bottom: 20px;
            padding-left: 60px;
            color: fff;

        }

        .items-wrapper.clearfloat p {
            margin-right: 20px;
            font-family: Helvetica, Arial, Sans-serif;

            color: fff;

        }

        .item {
            position: relative;
            width: 300px;
            height: 200px;
            padding: 7px;
            background: #d8d8d8;
            float: left;
            display: inline;
            margin-right: 50px;
        }

        .last-item {
            margin-right: 0;
        }

        .description {
            position: absolute;
            bottom: 7px;
            left: 7px;
            width: 224px;
            text-align: center;
            padding: 15px;
            color: #fff;
        }

        .enlarge {
            width: 300px;
            height: 200px;
            position: absolute;
            left: 7px;
            top: 7px;
            background-image: url(portfolio_overlay.png);
            background-repeat: no-repeat;
            background-position: center center;
        }

        .enlarge a {
            display: block;
            width: 100%;
            height: 100%;
            text-indent: -9999px;
        }

        #copyright {
            margin: 30px auto;
            text-align: center;
            background: url(h3_bg.gif) repeat-x left top;
        }

        #copyright p {
            padding-top: 15px;
        }

        .navbar.navbar-9 .navbar-toggler-icon {
            background-image: url('https://mdbcdn.b-cdn.net/img/svg/hamburger6.svg?color=000');

        }

        .bg-gradient-warning {
            background-image: linear-gradient(195deg, #b4ffb7 0%, #b4ffb708 100%);
        }

        .navbar-light {
            background-color: #ffffff0a !important;
            ;
        }

        .navbar {
            box-shadow: 0 2px 12px 0 rgb(0 0 0 / 0%);
        }

        .alert-danger {
            background-image: linear-gradient(195deg, #f1eded17 0%, #f7bfbe 100%);
        }

        .max-height-vh-100 {
            max-height: 220vh !important;
        }

        .etiquetas {
            font-size: 18px;
        }

        .selectAltura {
            height: 35px;
        }

        .chart-container {
            width: 1000px;
            height: 600px
        }

        .alinear {
            position: absolute;
            bottom: 0px;
            margin: 0;
        }
        .item {
            position: relative;
            width: 300px;
            height: 200px;
            padding: 7px;
            background: #c70b0b00;
            float: left;
            display: inline;
            margin-right: 50px;
        }
        .text-primary {
    color: #dd59a0 !important;
}
        /* .bg-success {
            background-color: #e91e63 !important;
        } */
        .bg-success {
    background-color: #4CAF50 !important;
}

element.style {
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #f6f6f6;
}
.table th {
    font-weight: 500;
}
.table th, .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #083276;
}
th {
    text-align: inherit;
}
*, *::before, *::after {
    box-sizing: border-box;
}
hoja de estilo del agente de usuario
th {
    display: table-cell;
    vertical-align: inherit;
    font-weight: bold;
    text-align: -internal-center;
}
        </style>
</body>

</html>
