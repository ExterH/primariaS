@extends('layout.menu')
@section('menu')
    <div class="container">
        <!--Formulario de calificaciones-->
        <form action="#" class="dropzone dropzone-custom needsclick add-professors" method="POST">
            @method('GET')
            @csrf
            <b>
                <i>
                    EDITAR CALIFICACIONES "
                    <br>
                    {{$alumnos->nombre.' '.$alumnos->apellidoP.' '.$alumnos->apellidoM}}"
                    <br>
                </i>
            </b>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="width: 30%">
                    <div class="form-group">
                        Matematicas: <br>
                        <input type="text" class="form-control" placeholder="10.0">
                    </div>
                    <div class="form-group">
                        Español: <br>
                        <input type="text" class="form-control" placeholder="10.0">
                    </div>
                    <div class="form-group">
                        Ciencias: <br>
                        <input type="text" class="form-control" placeholder="10.0">
                    </div>
                    <div class="form-group">
                        Computacion: <br>
                        <input type="text" class="form-control" placeholder="10.0">
                    </div><br>
                    <div class="form-group">
                        <button class="btn btn-danger">Actualizar calificación</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- fin del formularios -->
    </div>
@endsection