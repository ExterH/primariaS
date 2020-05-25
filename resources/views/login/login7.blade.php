@extends('layout.inicio')
@section('login')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="{{route('validar')}}" method="POST">
                @csrf
                <span class="login100-form-title p-b-26">
                    Ingreso al sistema
                </span>
                <div class="wrap-input100 validate-input" data-validate = "Correo incorrecto">
                    <input class="input100" type="text" name="email">
                    <span class="focus-input100" data-placeholder="Correo:"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Contraseña incorrecta">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password">
                    <span class="focus-input100" data-placeholder="Contraseña:"></span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Ingresar
                        </button>
                    </div>
                </div>

            </form>
                <div class="text-center p-t-115">
                    <span class="txt1">
                        ¿No tienes cuenta?
                    </span>

                    <a class="txt2" href="{{route('registrar')}}">
                        Registrarse
                    </a>
                    <br>
                    <a class="txt2" href="{{route('pagina.inicio')}}">
                        Regresar al inicio
                    </a>
                    <br>
                    <a class="txt2" href="{{route('login.restablecer')}}">
                        Olvide mi contraseña
                    </a>
                </div>
                
            
        </div>
    </div>
</div>
@endsection