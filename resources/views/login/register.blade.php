@extends('layout.login')
@section('login')
    <center>
    <br><br>
    <form action="{{route('login.store')}}" method="POST">
        @csrf
    Login <br>
    <input type="text" id="name" name="name" placeholder="Nombre Completo"><br>
    <input type="text" id="email" name="email" placeholder="Correo electronico"><br>
    <input type="password" id="password1" name="password1" placeholder="Contraseña"><br>
    <input type="password" id="password2" name="password2" placeholder="Confirmar Contraseña"><br>
    <button>Enviar</button>
    </form>
    </center>
@endsection