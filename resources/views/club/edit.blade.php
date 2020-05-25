@extends('layout.menu')
@section('menu')
<div id="myTabContent" class="tab-content custom-product-edit">
    <div class="product-tab-list tab-pane fade active in" id="description">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="review-content-section">
                    <div id="dropzone1" class="pro-ad">
                        <form action="{{route('clubs.update', ['id' => $clubs->idcl])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <h2>Clubs</h2><br>
                                    <div class="form-group">
                                        <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre de la imagen" value="{{$clubs->nombre}}">
                                    </div>
                                    <div class="form-group">
                                        <input name="detalle" id="detalle" type="text" class="form-control" placeholder="Descripcion" value="{{$clubs->detalle}}">
                                    </div>
                                    {{-- aslgo esta aqui --}}
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
                                                                <p>{{$clubs->info}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <textarea name="info" placeholder="Descripción" value="{{$clubs->detalle}}"></textarea>
                                        <label for="file" >BUSCAR  ARCHIVO</label>
                                    <br><input type="file" name="file" class="form-control-file"  id="file"><br>
                                        
                                    </div>
                                        {{-- <img src="public/upload/{{$clubs->imagen}}" alt=""> --}}
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="payment-adress">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
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