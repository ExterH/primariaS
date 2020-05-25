@extends('layout.menu')
@section('menu')
<div id="myTabContent" class="tab-content custom-product-edit">
    <div class="product-tab-list tab-pane fade active in" id="description">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="review-content-section">
                    <div id="dropzone1" class="pro-ad">
                        <form action="{{route('add.update', ['id' => $anuncios->idadd])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    
                                    
                                    <div class="form-group">
                                        <input name="titulo" id="titulo" type="text" class="form-control" placeholder="Titulo de la imagen" value="{{$anuncios->titulo}}">
                                    </div>
                                    <div class="form-group">
                                        <input name="detalle" id="detalle" type="text" class="form-control" placeholder="Descripcion" value="{{$anuncios->detalle}}">
                                    </div>
                                    <div class="form-group">
                                        <input name="url" id="url" type="text" class="form-control" placeholder="URL" value="{{$anuncios->url}}">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="admin-pro-accordion-wrap shadow-inner responsive-mg-b-30">
                                                
                                                <div class="panel-group edu-custon-design" id="accordion">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading accordion-head">
                                                            <h4 class="panel-title">
                                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                         Información</a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse1" class="panel-collapse panel-ic collapse in">
                                                            <div class="panel-body admin-panel-content animated bounce">
                                                                <p>{{$anuncios->info}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <textarea name="info" placeholder="Descripción" value="{{$anuncios->detalle}}"></textarea>
                                    <label for="file" >BUSCAR  ARCHIVO</label>
                                    <br><input type="file" name="file" class="form-control-file"  id="file">

                                    <br><img src="../../public/upload/{{$anuncios->imagen}}" alt="" width="70" height="70"/>
                                    
                                    
                                    
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="payment-adress">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Editar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</div>

@if (Session::has('notificacion'))
<h5>{{ Session::get('notificacion') }}</h5>
    

    
@endif
@isset($uploadfiles)
    
@endisset
@isset($uploadfiles)
    
@endisset
@foreach ($uploadfiles as $uploadfile)
    

<br>
{{$uploadfile['basename']}}
@endforeach  

    

<script>
var upload = document.getElemenyById("file");
upload.addEventListener("change", preview, false);
function preview(){
  var fileList = this.files[0];
    
imageType =/image.*/;
if(!fileList.type.match(imageType))
return;
var reader = new FileReader();
    
reader.onload  = fileOnload;
reader.readAsDataURL(fileList);
   
   
function fileOnload(e){
 var result=e.target.result;
document.getElementById("imagen").src  = result;-->
        
    }
}
</script>
@endsection