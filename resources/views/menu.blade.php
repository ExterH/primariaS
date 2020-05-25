@extends('layout.menu')
@section('inicio')
<center>
    <img src="{{asset('public/sistema/img/logo.jpg')}}" alt="">
    <h1>Escuela Primaria Símbolos Patrios, CCT 15EPR2431U</h1>
    <h4>San Pedro Arriba 5ta Sección, San Lorencito.</h4>
    <h4>Temoaya, Estado de México.</h4>
    <br><br><br>
    <h5><b>Tipo de Usuario:</b> {{ auth()->user()->rol}}</h5>
    <h5><b>Usuario:</b> {{ auth()->user()->name}}</h5>
    <h5><b>Correo electrónico:</b> {{ auth()->user()->email}}</h5>
</center>
@endsection