<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <title>Monitoreo de Indicadores </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Municipio de Tulancingo de Bravo" name="description" />
    <meta content="Sofipis" name="author" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/administration/favicon.png') }}">
    <!-- App Css-->
    <link href="{{ asset('css/administration.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    	<link rel="stylesheet" type="text/css" href="{{ asset('css/cargando.css') }}">
    	<link rel="stylesheet" type="text/css" href="{{ asset('css/maquinawrite.css') }}">
<script src="https://kit.fontawesome.com/eca8824b90.js" crossorigin="anonymous"></script>
</head>
<body data-layout="detached" data-topbar="colored">
<!-- Loader -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                    <span data-text-preloader="" class="letters-loading">
                                            </span>
                <span data-text-preloader="" class="letters-loading">

                    </span>
                <span data-text-preloader="" class="letters-loading">

                    </span>
                <span data-text-preloader="" class="letters-loading">

                    </span>
                <span data-text-preloader="" class="letters-loading">

                    </span>
                <span data-text-preloader="" class="letters-loading">

                    </span>
                <span data-text-preloader="" class="letters-loading">

                    </span>
                <span data-text-preloader="" class="letters-loading">

                </span>
                <span data-text-preloader="" class="letters-loading">

                </span>
                <span data-text-preloader="" class="letters-loading">

                </span>
            </div>
            <p class="text-center"></p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            @include('administration.layouts.partials.header.header')
        </header> <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu ">
            @include('administration.layouts.partials.vertical-menu')
        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                @yield('content')
            </div>
            <!-- End Page-content -->
            <footer class="footer">
                @include('administration.layouts.partials.footer')
            </footer>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
</div>
<!-- end container-fluid -->
<!-- JAVASCRIPT -->
<!-- <script src="{{ asset('js/app.js') }}"></script> -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/administration.js') }}"></script>


<script >




</script>
<style>

</style>
@yield('script')
</body>
</html>
