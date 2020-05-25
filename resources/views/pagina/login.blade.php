@extends('layout.pagina')
@section('team')
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container">
          <div class="row wow fadeInUp">
              <div class="col-lg-5 col-md-8">
              <div class="form">
                
              <form method="get"  class="contactForm" action="{{route('login')}}">
                
                @csrf
                <center>
                    <img src="http://www.primariasimbolospatrios.com.mx/public/sistema/img/logo.jpg" alt="">
                    <br><br>
                    Ingresar al sistema <br><br>
                <div class="text-center"><button type="submit" title="Ingresar al sistema">Ingresar al sistema</button></div>
                </center>
                </form>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- #contact -->
  
    </main>
    <div>

@endsection