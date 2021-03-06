<!DOCTYPE html>
<html lang="es" class="no-js">
    <!-- Head -->
    <head>
        <title>Autenticación de Usuarios</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="keywords" content="Autenticación de Usuarios y Roles en Laravel">
        <meta name="description" content="Autenticación de Usuarios y Roles en Laravel">
        <meta name="author" content="Carlos Ferrer Hernandez">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <!-- Components Vendor Styles -->
        <link rel="stylesheet" href="{{ asset('font-awesome/css/all.min.css')}}">

        <!-- Theme Styles -->
        <link rel="stylesheet" href="{{ asset('css/theme.css')}}">
    </head>
    <!-- End Head -->

    <body>
        <main class="container-fluid w-100" role="main">
            <div class="row">
                @yield('content')

                <div class="col-lg-6 d-none d-lg-flex flex-column align-items-center justify-content-center bg-light">
                    <img class="img-fluid position-relative u-z-index-3 mx-5" src="{{ asset('svg/mockups/mockup.svg')}}" alt="Image description">

                    <figure class="u-shape u-shape--top-right u-shape--position-5">
                        <img src="{{ asset('svg/shapes/shape-1.svg')}}" alt="Image description">
                    </figure>
                    <figure class="u-shape u-shape--center-left u-shape--position-6">
                        <img src="{{ asset('svg/shapes/shape-2.svg')}}" alt="Image description">
                    </figure>
                    <figure class="u-shape u-shape--center-right u-shape--position-7">
                        <img src="{{ asset('svg/shapes/shape-3.svg')}}" alt="Image description">
                    </figure>
                    <figure class="u-shape u-shape--bottom-left u-shape--position-8">
                        <img src="{{ asset('svg/shapes/shape-4.svg')}}" alt="Image description">
                    </figure>
                </div>
            </div>
        </main>
    </body>
</html>