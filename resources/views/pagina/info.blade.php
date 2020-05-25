@extends('layout.pagina')
@section('avisos')
    <br>
    <br>
    <br>
    <center>
        <img src="{{asset('public/sistema/img/logo.jpg')}}" alt="" width="200" height="200">
        <h1><b>Información del Anuncio</b></h1><br>
        <h2><b>"{{$anuncios->titulo}}"</b></h2>
        <img src="../../public/upload/{{$anuncios->imagen}}" alt="" height="400" width="700"><br><br>
        <h5><b>{{$anuncios->detalle}}</b></h5><br>
        <p>{{$anuncios->info}}</p>
        <a href="{{$anuncios->url}}"><button type="button" class="btn btn-link">Ir al sitio</button></a>
    </center>
@endsection