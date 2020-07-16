@extends('layout.menu')
@section('menu')

<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Información Básica</a></li>
                        
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form method="POST" action="{{route('alumnos.update', ['id' => $alumnos->ida])}}" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="matricula" id="matricula" type="text" class="form-control" placeholder="Matricula" value="{{$alumnos->matricula}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre" value="{{$alumnos->nombre}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="apellidoP" id="apellidoP" type="text" class="form-control" placeholder="Apellido Paterno" value="{{$alumnos->apellidoP}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="apellidoM" id="apellidoM" type="text" class="form-control" placeholder="Apellido Materno" value="{{$alumnos->apellidoM}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="fecha" id="fecha" type="date" class="form-control" placeholder="Fecha de nacimiento" value="{{$alumnos->fecha}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="grado" id="grado" class="form-control" value="{{$alumnos->grado}}">
                                                                <option value="none" selected="" disabled="">Seleccionar grado</option>
                                                                @foreach($grado as $grados)
                                                                <option value="{{$grados->idg}}">{{$grados->nombre.'° grado'}}</option>
                                                                @endforeach
                                                            </select>
                                                            <ul id="myTabedu1" class="tab-review-design">
                                                        <ul id="myTabedu1" class="tab-review-design"><br>
                                                            <li class="active"><a href="#description">INFORMACIÓN DEL TUTOR</a></li>
                                                        </ul>  
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="tutor" id="tutor" type="text" class="form-control" placeholder="Nombre completo" value="{{$alumnos->tutor}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="email" id="email" type="text" class="form-control" placeholder="Ingresa el Email" value="{{$alumnos->email}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="telefono" id="telefono" type="text" class="form-control" placeholder="Ingresa el Telefono" value="{{$alumnos->telefono}}">
                                                        </div>
                                                        <ul id="myTabedu1" class="tab-review-design">
                                                            <li class="active"><a href="#description">DATOS DOMICILIARIOS</a></li>
                                                        </ul> 
                                                        <div class="form-group">
                                                            <input name="calle" id="calle" type="text" class="form-control" placeholder="Calle" value="{{$alumnos->calle}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="colonia" id="colonia" type="text" class="form-control" placeholder="Colonia" value="{{$alumnos->colonia}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="municipio" id="munucipio" type="text" class="form-control" placeholder="Municipio" value="{{$alumnos->municipio}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="biografia" id="biografia" type="" class="form-control" placeholder="Biografia" value="{{$alumnos->biografia}}"></textarea>
                                                        </div>
                                                        </div>
                                                    </div>
                                                <div class="row">
                                                    <div class="col-lg-12"><br>
                                                        <div class="container"><!-- payment-adress -->
                                                            <button type="submit" class="btn btn-danger">Actualizar</button><!-- btn btn-primary waves-effect waves-light -->
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection