<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Simbolos Patrios | Administrados</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="public/principal.png ">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('public/sistema/css/bootstrap.min.css')}}">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('public/sistema/css/font-awesome.min.css')}}">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('public/sistema/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('public/sistema/css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('public/sistema/css/owl.transitions.css')}}">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('public/sistema/css/animate.css')}}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('public/sistema/css/normalize.css')}}">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('public/sistema/css/meanmenu.min.css')}}">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('public/sistema/css/main.css')}}">
        <!-- educate icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('public/sistema/css/educate-custon-icon.css')}}">
        <!-- morrisjs CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('public/sistema/css/morrisjs/morris.css')}}">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('public/sistema/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('public/sistema/css/metisMenu/metisMenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/sistema/css/metisMenu/metisMenu-vertical.css')}}">
        <!-- calendar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('public/sistema/css/calendar/fullcalendar.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/sistema/css/calendar/fullcalendar.print.min.css')}}">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('public/sistema/style.css')}}">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="{{asset('public/sistema/css/responsive.css')}}">
        <!-- modernizr JS
            ============================================ -->
        <script src="{{asset('public/sistema/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{route('menu')}}"><img class="main-logo" src="{{asset('public/sistema/img/logo.jpg')}}" alt="" width="100" height="100"/></a>
                <strong><a href="index.html"><img src="{{asset('public/sistema/img/logo.jpg')}}" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="{{url('/menu')}}">
								   <span class="educate-icon educate-home icon-wrap"></span>
								   <span class="mini-click-non">Perfil</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="{{url('/menu')}}"><span class="mini-sub-pro">Inicio</span></a></li>
                                
                            </ul>
                        </li>
                        <li>
                            <a title="Landing Page" href="{{route('anuncios')}}" aria-expanded="false">
                                <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true">
                                </span> 
                                <span class="mini-click-non">Anuncios</span>
                            </a>
                        </li>
                        @if (Auth::user()->rol == "Administrador" || Auth::user()->rol == "Directora")
                        <li>
                            <a title="Landing Page" href="{{url('banners')}}" aria-expanded="false">
                                <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true">
                                </span> 
                                <span class="mini-click-non">Banners
                                </span>
                            </a>
                        </li>                      
                        @endif
                        <li>
                            <a title="Landing Page" href="{{url('filles')}}" aria-expanded="false">
                                <span class="educate-icon educate-data-table icon-wrap" aria-hidden="true">
                                </span> 
                                <span class="mini-click-non">Archivos
                                </span>
                            </a>
                        </li>
                        
                        {{-- <li>
                            <a class="has-arrow" href="#" aria-expanded="false">
                                <span class="educate-icon educate-professor icon-wrap"></span> 
                                <span class="mini-click-non">Profesores</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="#"><span class="mini-sub-pro">Inicio</span></a></li>
                                
                            </ul>
                        </li> --}}

                        {{-- Acceso administrador --}}
                        {{-- @if ()
                            
                        @endif --}}
                        <li>
                            <a class="has-arrow" href="{{route('alumnos.index')}}" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Alumnos</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{route('alumnos.index')}}"><span class="mini-sub-pro">Inicio</span></a></li>
                                
                            </ul>
                        </li>
                        <li>


                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Clubs</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{route('clubs.todos')}}"><span class="mini-sub-pro">Todos los clubs</span></a></li>
                            </ul>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{url('clubs')}}"><span class="mini-sub-pro">Inicio</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false">
                                <span class="educate-icon educate-course icon-wrap"></span> 
                                <span class="mini-click-non">Calificaciones</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li>
                                    {{-- <a title="All Courses" href="{{route('clubs.todos')}}">
                                        <span class="mini-sub-pro">Alumnos</span>
                                    </a> --}}
                                </li>
                            </ul>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="{{url('calificaciones')}}"><span class="mini-sub-pro">Inicio</span></a></li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Biblioteca</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="#"><span class="mini-sub-pro">Libreria</span></a></li>
                            </ul>
                        </li> --}}
                        
                       
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area" style="background: darkred">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-danger navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="{{url('menu')}}" class="nav-link">Inicio</a>
                                                </li>
                                                {{-- <li class="nav-item"><a href="#" class="nav-link">About</a>
                                                </li> --}}
                                                {{-- <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                                </li> --}}
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Soporte Tecnico <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        {{-- <a href="#" class="dropdown-item">Documentation</a> --}}
                                                        <a href="#" class="dropdown-item">Contacto del programador</a>
                                                        <a href="#" class="dropdown-item">Sobre el Sistema</a>
                                                        <a href="#" class="dropdown-item">Queja o sugerencia</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Ayuda <span class="fa fa-info-circle"></span> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                
                                                
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="btn"> <!-- nav-link dropdown-toggle -->
															<img src="img/product/pro4.jpg" alt="" />
															<span class="admin-name">{{ auth()->user()->name}}</span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><button class="btn btn-link"><span ></span>Mi cuenta</button>
                                                        </li>
                                                        <li><button class="btn btn-link"><span ></span>Perfil hijo</button>
                                                        </li>
                                                        
                                                        <li><button class="btn btn-link"><span ></span>Configuraciones</button>
                                                        </li>
                                                    <li>
                                                        <form method="POST" action="{{route('logout')}}">
                                                        @csrf
                                                        <button class="btn btn-link">
                                                            <span></span>
                                                            Cerrar sesión
                                                        </button>
                                                    </form>
                                                        </li>
                                                        
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Algo que necesito-->

            <!-- Mobile Menu start -->
            {{-- <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Dashboard v.1</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a href="events.html">Event</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="all-professors.html">All Professors</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="all-students.html">All Students</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="all-courses.html">All Courses</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.html">Library Assets</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demodepart" class="collapse dropdown-header-top">
                                                <li><a href="departments.html">Departments List</a>
                                                </li>
                                               
                                            </ul>
                                        </li>
                                        
                                        
                                        
                                        
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="{{route('menu')}}">Inicio</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Primaria Simbolos Patrios</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <br>
                                    <br>
                                    
                                    @yield('inicio')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                   @yield('menu')
                </div>
            </div>
        </div>
        

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        
        
        <div class="footer-copyright-area" style="background: darkred">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>
                                <a href="{{route('pagina.inicio')}}" class="btn btn-wiht">
                                    Inicio
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- jquery
		============================================ -->
        <script src="{{asset('public/sistema/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{asset('public/sistema/js/bootstrap.min.js')}}"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{asset('public/sistema/js/wow.min.js')}}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{asset('public/sistema/js/jquery-price-slider.js')}}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{asset('public/sistema/js/jquery.meanmenu.js')}}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{asset('public/sistema/js/owl.carousel.min.js')}}"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="{{asset('public/sistema/js/jquery.sticky.js')}}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{asset('public/sistema/js/jquery.scrollUp.min.js')}}"></script>
        <!-- counterup JS
            ============================================ -->
        <script src="{{asset('public/sistema/js/counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('public/sistema/js/counterup/waypoints.min.js')}}"></script>
        <script src="{{asset('public/sistema/js/counterup/counterup-active.js')}}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{asset('public/sistema/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('public/sistema/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="{{asset('public/sistema/js/metisMenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('public/sistema/js/metisMenu/metisMenu-active.js')}}"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="{{asset('public/sistema/js/morrisjs/raphael-min.js')}}"></script>
        <script src="{{asset('public/sistema/js/morrisjs/morris.js')}}"></script>
        <script src="{{asset('public/sistema/js/morrisjs/morris-active.js')}}"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="{{asset('public/sistema/js/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('public/sistema/js/sparkline/jquery.charts-sparkline.js')}}"></script>
        <script src="{{asset('public/sistema/js/sparkline/sparkline-active.js')}}"></script>
        <!-- calendar JS
            ============================================ -->
        <script src="{{asset('public/sistema/js/calendar/moment.min.js')}}"></script>
        <script src="{{asset('public/sistema/js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('public/sistema/js/calendar/fullcalendar-active.js')}}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{asset('public/sistema/js/plugins.js')}}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{asset('public/sistema/js/main.js')}}"></script>
        <!-- tawk chat JS
            ============================================ 
        <script src="{{asset('public/sistema/js/tawk-chat.js')}}"></script>-->

        <script src="{{asset('public/sistema/js/tab.js')}}"></script>
    <!--  editable JS
		============================================ -->
        <script src="{{asset('public/sistema/js/editable/jquery.mockjax.js')}}"></script>
        <script src="{{asset('public/sistema/js/editable/mock-active.js')}}"></script>
        <script src="{{asset('public/sistema/js/editable/select2.js')}}"></script>
        <script src="{{asset('public/sistema/js/editable/moment.min.js')}}"></script>
        <script src="{{asset('public/sistema/js/editable/bootstrap-datetimepicker.js')}}"></script>
        <script src="{{asset('public/sistema/js/editable/bootstrap-editable.js')}}"></script>
        <script src="{{asset('public/sistema/js/editable/xediable-active.js')}}"></script>
    <!-- plugins JS-->
    {{-- <script>
        $(document).ready(function(){
            $("#modall").click(function(){
                $("#showmodall").append('{{$anuncios->info}}')
            });
        });
    </script> --}}
</body>

</html>