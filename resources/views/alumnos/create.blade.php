@extends('layout.menu')
@section('menu')

<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">INFORMACIÓN BASICA DEL ALUMNO</a></li>
                        
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form method="POST" action="{{route('alumnos.store')}}" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="matricula" id="matricula" type="text" class="form-control" placeholder="Matricula">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="apellidoP" id="apellidoP" type="text" class="form-control" placeholder="Apellido Paterno">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="apellidoM" id="apellidoM" type="text" class="form-control" placeholder="Apellido Materno">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="fecha" id="fecha" type="date" class="form-control" placeholder="Fecha de nacimiento">
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="grado" id="grado" class="form-control">
                                                                <option value="none" selected="" disabled="">Seleccionar grado</option>
                                                                @foreach($grado as $grados)
                                                                <option value="{{$grados->idg}}">{{$grados->nombre.'° grado'}}</option>
                                                                @endforeach
                                                            </select>
                                                        <ul id="myTabedu1" class="tab-review-design">
                                                            <li class="active"><a href="#description">INGRESA LA INFORMACIÓN DEL TUTOR</a></li>
                                                        </ul>  
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="tutor" id="tutor" type="text" class="form-control" placeholder="Nombre completo">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="email" id="email" type="text" class="form-control" placeholder="Ingresa el Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="telefono" id="telefono" type="text" class="form-control" placeholder="Ingresa el Telefono">
                                                        </div>
                                                        <ul id="myTabedu1" class="tab-review-design">
                                                            <li class="active"><a href="#description">DATOS DOMICILIARIOS</a></li>
                                                        </ul> 
                                                        <div class="form-group">
                                                            <input name="calle" id="calle" type="text" class="form-control" placeholder="Calle">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="colonia" id="colonia" type="text" class="form-control" placeholder="Colonia">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="municipio" id="munucipio" type="text" class="form-control" placeholder="Municipio">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea name="biografia" id="biografia" type="" class="form-control" placeholder="Biografia"></textarea>
                                                        </div>
                                                        
                                                        
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
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