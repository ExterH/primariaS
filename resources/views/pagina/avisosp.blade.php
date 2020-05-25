@extends('layout.pagina')
@section('avisos')



 <!--==========================
      More Features Section
    ============================-->
    <section id="more-features" class="section-bg">
        <div class="container">
  
          <div class="section-header">
            <h3 class="section-title">AVISOS Y EVENTOS</h3>
            <span class="section-divider"></span>
            <p class="section-description">Avisos y eventos dirgidos a nuestros padres de familia.</p>
          </div>
          
          
          <div class="row">
            @foreach ($anuncio as $anuncios)
            <div class="col-lg-6">
              <div class="box wow fadeInLeft">
                <!--<div class="icon"><i class="ion-ios-stopwatch-outline"></i></div>-->
                <a href="{{route('pagina.info',['id'=>$anuncios->idadd])}}">
                  <img src="public/upload/{{$anuncios->imagen}}" alt="" width="200" height="150" class="icon">
                </a>
                <h4 class="title">{{$anuncios->titulo}}</h4>
                <p class="description">{{$anuncios->detalle}}</p><br>
                <!--<p class="description">{{$anuncios->info}}</p>-->
                
                <br><br><br>
                <a href="{{$anuncios->url}}"><button type="button" class="btn btn-link">Ir al sitio</button></a>
                <form action="{{route('pagina.info',['id'=>$anuncios->idadd])}}" method="POST">
                  @method('GET')
                  <a href="{{route('pagina.info',['id'=>$anuncios->idadd])}}">
                  <button class="btn btn-link">Info</button>
                  </a>
                </form>
                
              </div>
            </div>

            
            <!--<div class="col-lg-6">
              <div class="box wow fadeInRight">
                <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                <h4 class="title"><a href="{{$anuncios->url}}">{{$anuncios->titulo}}</a></h4>
                <p class="description">{{$anuncios->detalle}}</p>
              </div>
            </div>
            
  
            <div class="col-lg-6">
              <div class="box wow fadeInLeft">
                <div class="icon"><i class="ion-ios-heart-outline"></i></div>
                <h4 class="title"><a href=""></a></h4>
                <p class="description"></p>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="box wow fadeInRight">
                <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
              </div>
            </div>-->
            

            @endforeach
  
          </div>
        </div>
      </section><!-- #more-features -->
  
      <!--==========================
        Clients
      ============================-->
      
     
@endsection

