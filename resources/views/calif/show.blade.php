@extends('layout.menu')
@section('menu')
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="profile-info-inner">
                    <div class="profile-img">
                        <img src="{{asset('public/sistema/img/iconos/icono3.jpeg')}}" alt="" />
                    </div>
                    <div class="profile-details-hr" style="height: 400px">
                        <div class="row" >
                            {{-- col-lg-6 col-md-12 col-sm-12 col-xs-6 --}}
                            <div>
                                <div class="address-hr">
                                    <p>
                                        <b>
                                            Nombre
                                        </b>
                                        <br/> 
                                        {{$alumnos->nombre.' '.$alumnos->apellidoP.' '.$alumnos->apellidoM}}
                                    </p>
                                </div>
                            </div>
                            <div class="">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p>
                                        <b>
                                            Padre o tutor
                                        </b>
                                        <br/> 
                                        {{$alumnos->tutor}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="">
                                <div class="address-hr">
                                    <p><b>Correo</b><br /> {{$alumnos->email}}</p>
                                </div>
                            </div>
                            <div class="">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Telefono </b><br /> +52 1 {{$alumnos->telefono}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="">
                                <div class="address-hr">
                                    <p><b>Dirección</b><br /> {{$alumnos->calle.', '.$alumnos->colonia.', '.$alumnos->municipio.', Edo. México.'}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" >
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">ACTIVIDAD</a></li>
                        <li><a href="#reviews"> INFORMACIÓN</a></li>
                        <li><a href="#INFORMATION">CALIFICACIÓN</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro"  style="height: 650px">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>CLUB'S</th>
                                        <th>BIOGRAFIA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <i>(En el que este inscrito)</i> </td>
                                        <td> {{$alumnos->biografia}} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="reviews" style="height: 650px">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="chat-discussion" style="height: auto">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Información</th>
                                                        <th>Datos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <b>
                                                                Matricula: 
                                                            </b>
                                                        </td>
                                                        <td>
                                                            {{$alumnos->matricula}} 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Alumno: </b></td>
                                                        <td>{{$alumnos->nombre.' '.$alumnos->apellidoP.' '.$alumnos->apellidoM}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Grado: </b></td>
                                                        <td>{{$alumnos->grado}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Correo: </b></td>
                                                        <td>{{$alumnos->email}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Telefono: </b></td>
                                                        <td>{{$alumnos->telefono}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Domicilio: </b></td>
                                                        <td>{{$alumnos->calle.' '.$alumnos->colonia.' '.$alumnos->municipio}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Biografia: </b></td>
                                                        <td>{{$alumnos->biografia}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Padre o Tutor: </b></td>
                                                        <td>{{$alumnos->tutor}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="INFORMATION" style="height: 650px">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div>
                                                <div class="sparkline8-list">
                                                    <div class="sparkline8-hd">
                                                        <div class="main-sparkline8-hd">
                                                            <h1>Tabla de calificaciones del alumno 
                                                                <b style="color: darkred">
                                                                    "{{$alumnos->nombre.' '.$alumnos->apellidoP.' '.$alumnos->apellidoM}}"
                                                                </b> 
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <div class="sparkline8-graph">
                                                        <div class="static-table-list">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Materia</th>
                                                                        <th>Calificación</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Español</td>
                                                                        <td>9</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Matematicas</td>
                                                                        <td>8</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>Ciencias</td>
                                                                        <td>6</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <br>
                                                            <textarea name="" id="" cols="30" rows="10" disabled>{{$alumnos->biografia}}
                                                            </textarea>
                                                            <br>
                                                            <b>
                                                                Calificación total: 
                                                            </b>
                                                            <br>    
                                                            <input type="text" placeholder="8.8" disabled>
                                                            <br><br>
                                                            <a href="{{route('calif.edit',['id'=>$alumnos->ida])}}">
                                                                <input 
                                                                type="button" 
                                                                class="btn btn-danger" 
                                                                style="background: darkred" 
                                                                value="Editar Calificaciones">
                                                            </a>
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
            </div>
        </div>
    </div>
</div>
@endsection