
<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->
<head>
    <title>Autenticación de Usuarios y Roles en Laravel</title>

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
    <link rel="stylesheet" href="{{ asset('css/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables/datatables.min.css')}}"/>

    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{ asset('css/theme.css')}}">

</head>
<!-- End Head -->

<body>
    <!-- Header (Topbar) -->
    <header class="u-header">
        <div class="u-header-left">
            <a class="u-header-logo" href="{{ route('inicio')}}">
                <img class="u-logo-desktop" src="{{ asset('img/logo.png')}}" width="160" alt="Stream Dashboard">
                <img class="img-fluid u-logo-mobile" src="{{ asset('img/logo-mobile.png')}}" width="50" alt="Stream Dashboard">
            </a>
        </div>

        <div class="u-header-middle">
            <div class="u-header-search"
            data-search-mobile-invoker="#headerSearchMobileInvoker"
            data-search-target="#headerSearch">
            <a id="headerSearchMobileInvoker" class="btn btn-link input-group-prepend u-header-search__mobile-invoker" href="#!">
                <i class="fa fa-search"></i>
            </a>

            <div id="headerSearch" class="u-header-search-form">
                <form>
                    <div class="input-group">
                        <button class="btn-link input-group-prepend u-header-search__btn" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                        <input class="form-control u-header-search__field" type="search" placeholder="Escriba para buscar…">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="u-header-right">
        <!-- Activities -->
        <div class="dropdown mr-4">
            <a class="link-muted" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                <span class="h3">
                    <i class="far fa-envelope"></i>
                </span>
                <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-secondary"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
                <div class="card">
                    <div class="card-header d-md-flex align-items-center py-3">
                        <h2 class="h4 card-header-title">Mensajes</h2>
                        <a class="ml-auto" href="#">Limpiar todo</a>
                    </div>

                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <!-- Activity -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media align-items-center">
                                    <img class="u-avatar--sm rounded-circle mr-3" src="{{ asset('img/avatars/img1.jpg')}}" alt="Image description">

                                    <div class="media-body">
                                        <div class="d-md-flex align-items-center">
                                            <h4 class="mb-1">Chad Cannon</h4>
                                            <small class="text-muted ml-md-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0" style="max-width: 250px;">
                                            We've just done the project.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Activity -->
                        </div>
                    </div>

                    <div class="card-footer py-3">
                        <a class="btn btn-block btn-outline-primary" href="#">Ver todas los mensajes</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Activities -->

        <!-- Notifications -->
        <div class="dropdown mr-4">
            <a class="link-muted" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                <span class="h3">
                    <i class="far fa-bell"></i>
                </span>
                <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-info"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
                <div class="card">
                    <div class="card-header d-md-flex align-items-center py-3">
                        <h2 class="h4 card-header-title">Notificaciones</h2>
                        <a class="ml-auto" href="#">Limpiar todo</a>
                    </div>

                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <!-- Notification -->
                            <a class="list-group-item list-group-item-action" href="#">
                                <div class="media align-items-center">
                                    <div class="u-icon u-icon--sm rounded-circle bg-danger text-white mr-3">
                                        <i class="fab fa-dribbble"></i>
                                    </div>

                                    <div class="media-body">
                                        <div class="d-md-flex align-items-center">
                                            <h4 class="mb-1">Dribbble</h4>
                                            <small class="text-muted ml-md-auto">23 Jan 2018</small>
                                        </div>

                                        <p class="text-truncate mb-0" style="max-width: 250px;">
                                            <span class="text-primary">@htmlstream</span> just liked your post!
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- End Notification -->
                        </div>
                    </div>

                    <div class="card-footer py-3">
                        <a class="btn btn-block btn-outline-primary" href="#">Ver todas las notificaciones</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Notifications -->

        <!-- User Profile -->
        <div class="dropdown ml-2">
            <a class="link-muted d-flex align-items-center" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                <img class="u-avatar--xs img-fluid rounded-circle mr-2" src="{{ asset('img/avatars/img3.jpg')}}" alt="User Profile">
                <span class="text-dark d-none d-sm-inline-block">
                    {{ Auth::user()->name }} <small class="fa fa-angle-down text-muted ml-1"></small>
                </span>
            </a>

            <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-3" aria-labelledby="dropdownMenuLink" style="width: 260px;">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-4">
                                <a class="d-flex align-items-center link-dark" href="{{ route('perfil')}}">
                                    <span class="h3 mb-0"><i class="far fa-user-circle text-muted mr-2"></i></span> Ver perfil
                                </a>
                            </li>
                            <li class="mb-4">
                                <a class="d-flex align-items-center link-dark" href="#!">
                                    <span class="h3 mb-0"><i class="far fa-list-alt text-muted mr-2"></i></span> Configuraciones
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center link-dark" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span class="h3 mb-0"><i class="far fa-share-square text-muted mr-2"></i></span> Salir
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End User Profile -->
</div>
</header>
<!-- End Header (Topbar) -->

<main class="u-main" role="main" style="padding-left: 0;">  
    
    <div class="u-content">
        <div class="u-body">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer class="u-footer d-md-flex align-items-md-center text-center text-md-left text-muted">
            <small class="text-muted ml-auto">&copy; 2019
                <a class="text-muted" href="https://github.com/Carlosferrerhernandez/" target="_blank">Developed Carlos Ferrer
                </small>
            </footer>
            <!-- End Footer -->
        </div>
    </main>

    <!-- Global Vendor -->
    <script src="{{ asset('js/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('js/jquery-migrate/jquery-migrate.min.js')}}"></script>
    <script src="{{ asset('js/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{ asset('js/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('js/chart.js/dist/Chart.min.js')}}"></script>

    <!-- Initialization  -->
    <script src="{{ asset('js/sidebar-nav.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="{{ asset('js/dashboard-page-scripts.js')}}"></script>

    @yield('scripts')
    
</body>
</html>