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
                    <div class="profile-details-hr">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><b>Nombre</b><br /> {{$alumnos->nombre}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Padre o tutor</b><br /> {{$alumnos->tutor}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><b>Correo</b><br /> {{$alumnos->email}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Telefono </b><br /> +52 1 {{$alumnos->telefono}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="address-hr">
                                    <p><b>Dirección</b><br /> {{$alumnos->calle.', '.$alumnos->colonia.', '.$alumnos->municipio.', Edo. México.'}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="address-hr">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <h3>500</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="address-hr">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <h3>900</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="address-hr">
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <h3>600</h3>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Actividad</a></li>
                        <li><a href="#reviews"> Información</a></li>
                        <li><a href="#INFORMATION">Calificación</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p><b>Clubes</b><br /> Por confirmar</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p><b>Padre o tutor</b><br /> {{$alumnos->tutor}}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p><b>Email</b><br /> porconfirmar@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p><b>Telefono</b><br /> 722...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="content-profile">
                                                   {{$alumnos->biografia}} 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                {{-- <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h2>Skill Set</h2>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="progress-skill">
                                                    <h2>Java</h2>
                                                    <div class="progress progress-mini">
                                                        <div style="width: 90%;" class="progress-bar progress-yellow"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-skill">
                                                    <h2>Php</h2>
                                                    <div class="progress progress-mini">
                                                        <div style="width: 80%;" class="progress-bar progress-green"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-skill">
                                                    <h2>Apps</h2>
                                                    <div class="progress progress-mini">
                                                        <div style="width: 70%;" class="progress-bar progress-blue"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-skill">
                                                    <h2>C#</h2>
                                                    <div class="progress progress-mini">
                                                        <div style="width: 60%;" class="progress-bar progress-red"></div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                        
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="reviews">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="chat-discussion" style="height: auto">
                                            <div class="chat-message">
                                                <b>Matricula: </b>{{$alumnos->matricula}} <br>
                                                <b>Alumno: </b>{{$alumnos->nombre.' '.$alumnos->apellidoP.' '.$alumnos->apellidoM}} <br>
                                                <b>Grado: </b>{{$alumnos->grado}} <br>
                                                <b>Correo: </b>{{$alumnos->email}} <br>
                                                <b>Telefono: </b>{{$alumnos->telefono}} <br>
                                                <b>Domicilio: </b>{{$alumnos->calle.' '.$alumnos->colonia.' '.$alumnos->municipio}} <br>
                                                <b>Biografia: </b>{{$alumnos->biografia}} <br>
                                                <b>Padre o Tutor: </b>{{$alumnos->tutor}}
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="INFORMATION">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="sparkline8-list">
                                                    <div class="sparkline8-hd">
                                                        <div class="main-sparkline8-hd">
                                                            <h1>Tabla de calificaciones del alumno "{{$alumnos->nombre.' '.$alumnos->apellidoP.' '.$alumnos->apellidoM}}" </h1>
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
                                                                        {{-- <th>Username</th> --}}
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Español</td>
                                                                        <td>9</td>
                                                                        {{-- <td>@Facebook</td> --}}
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Matematicas</td>
                                                                        <td>8</td>
                                                                        {{-- <td>@Twitter</td> --}}
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>Ciencias</td>
                                                                        <td>6</td>
                                                                        {{-- <td>@Linkedin</td> --}}
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <br>
                                                            <textarea name="" id="" cols="30" rows="10" disabled>Algo que tendra de queja</textarea>
                                                            <br>
                                                            <b>Calificación total: </b>
                                                            <input type="text" placeholder="8.8" disabled>
                                                            <br><br><a href="#">
                                                            <input type="button" class="btn btn-danger" value="Editar Calificaciones"></a>
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