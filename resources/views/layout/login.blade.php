<!--login <br><br>
<form action="{ {route('validar')}}" method="POST">
    @ csrf
    <input type="text" name="email" id="email" placeholder="Uusario o email"><br>
    <input type="password" name="password" id="password" placeholder="password"><br>
    <button>Ingresar</button>
</form>-->

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Simbolos Patrios | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/sistema/img/favicon.ico')}}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
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
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/sistema/css/main.css')}}">
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('public/sistema/css/form/all-type-forms.css')}}">
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
    
    @yield('login')
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
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('public/sistema/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('public/sistema/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('public/sistema/js/metisMenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('public/sistema/js/metisMenu/metisMenu-active.js')}}"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{asset('public/sistema/js/tab.js')}}"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{asset('public/sistema/js/icheck/icheck.min.js')}}"></script>
    <script src="{{asset('public/sistema/js/icheck/icheck-active.js')}}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('public/sistema/js/plugins.js')}}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('public/sistema/js/main.js')}}"></script>
  
</body>

</html>