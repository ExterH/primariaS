<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ESCUELA PRIMARIA</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link rel="stylesheet" href="{{asset('public/jquery-3.3.1.min.js')}}">
  <link rel="stylesheet" href="{{asset('public/jquery-ui.js')}}">
  <link rel="stylesheet" href="{{asset('public/sweetalert.min.js')}}">
  <!-- Favicons -->
  <link href="{{asset('public/pagina/img/favicon.png')}}" rel="icon">
  <link href="{{asset('public/pagina/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrpublic/ap CSS File -->
  <link href="{{asset('public/pagina/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('public/pagina/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/pagina/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/pagina/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/pagina/lib/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('public/pagina/css/style.css')}}" rel="stylesheet">

 
  @yield('style')
  

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
       <h1><a href="#intro" class="scrollto"> SIMBOLOS PATRIOS</a></h1>
       
         
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{route('pagina.inicio')}}">INICIO</a></li>
          <li><a href="{{route('pagina.conocenos')}}">CONOCENOS</a></li>
         <!-- <li><a href="#features">Features</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li><a href="#team">Team</a></li>-->
          <li><a href="{{route('pagina.galeria')}}">GALERIA</a></li>
          <li class="menu-has-children"><a href="">SEGUIMIENTO ESCOLAR</a>
            <ul>
              <li><a href="{{route('pagina.avisos')}}">AVISOS Y EVENTOS</a></li>
              <li><a href="{{route('pagina.loggin')}}">SISTEMA</a></li>
              <li class="menu-has-children"><a href="#">CLUB ESCOLAR</a>
                <ul>
                  <li><a href="{{route('pagina.compu')}}">COMPUTACIÓN</a></li>
                  <li><a href="{{route('pagina.matematicas')}}">MATEMATICAS LÚDICAS</a></li>
                  <li><a href="{{route('pagina.ciencias')}}">JUGAR CON LA CIENCIA</a></li>
                </ul>
              </li>
              
        
            </ul>
          </li>
          <li><a href="{{route('pagina.contactanos')}}">CONTACTANOS</a></li>
          {{-- <li><a href="{{route('pagina.loggin')}}">SISTEMA</a></li> --}}
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  

  
 <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    

        
    
    @yield('inicio')
    @yield('conocenos')
  </section><!-- #intro -->
  
  <main id="main">


@yield('conocenos1')
    
  
    
@yield('feature')

@yield('pricing')

  @yield('team')

 @yield('galery')  

 @yield('drop')
 @yield('avisos')
 @yield('eventos')
 @yield('compu')
 @yield('matematicas')
 @yield('ciencias')
 @yield('paypal')
  
     <br>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Simbolos Patrios</strong>. Todos los derechos reservados
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
            -->
           
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="{{route('pagina.inicio')}}" class="scrollto">INICIO</a>
            <a href="{{route('pagina.contactanos')}}" class="scrollto">CONTACTANOS</a>
            <a href="{{route('pagina.galeria')}}">GALERIA</a>
            <a href="{{route('pagina.contactanos')}}">CONTACTANOS</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('public/pagina/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('public/pagina/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/pagina/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/pagina/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('public/pagina/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('public/pagina/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('public/pagina/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('public/pagina/lib/magnific-popup/magnific-popup.min.js')}}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{asset('public/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('public/pagina/js/main.js')}}"></script>
  @yield('script')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  {{-- <script>
    $(document).ready(function(){
      $("#modall").click(function(){
        $("#showmodall").append('{{$anuncios->imagen}}')
      });
    });
  </script> --}}
</body>
</html>
