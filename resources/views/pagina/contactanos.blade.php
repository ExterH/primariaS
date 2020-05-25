
@extends('layout.pagina')
@section('pricing')
<!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container">
          <div class="row wow fadeInUp">
  
            <div class="col-lg-4 col-md-4">
              <div class="contact-about">
                <h3>SIMBOLOS PATRIOS</h3>
                <p align="justify">Transmitr enseñanzas de calidad a nuestros alumnos es un compromiso que nos hacemos día con día.</p>
                
                <div id="map_canvas" style="width:350px;height:300px;">
                  <script src="https://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
                </div>
                <br>
                <br>

                
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="info">
                <div>
                  <i class="ion-ios-location-outline"></i>
                  <p>Localidad de San Lorencito, <br>Quinta Sección de San Pedro Arriba, <br>Temoaya, México</p>
                </div>
  
                <div>
                  <i class="ion-ios-email-outline"></i>
                  <p>oficial@primariasimbolospatrios.com.mx</p>
                </div>
  
                <div>
                  <i class="ion-ios-telephone-outline"></i>
                  <p>Teléfono:722-677-9780</p>
                </div>
              
              </div>
            </div>
  
            
            <div class="col-lg-5 col-md-8">
              <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
              <form method="POST"  class="contactForm" action="{{route('email.respuesta')}}">
                @csrf
                  <div class="form-row">
                    <div class="form-group col-lg-6">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Nombre Completo" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-6">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="asunto" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="msg" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center"><button type="submit" title="Send Message">Enviar Mensaje</button></div>
                </form>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- #contact -->
  
    </main>
    <div>
      
      
   
      <script type="text/javascript">
          var latlng = new google.maps.LatLng(19.485051,-99.5647958);
          
   
          // definimos valor por defecto
          var myOptions = {
              zoom: 14,
              center: latlng,
              mapTypeId: google.maps.MapTypeId.ROADMAP
          };
   
          // generamos el mapa
          var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
   
          
   
          
      </script>

@endsection