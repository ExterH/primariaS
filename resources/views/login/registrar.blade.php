@extends('layout.inicio')
@section('login')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="{{route('validarRegistro')}}" method="POST">
                @csrf
                <span class="login100-form-title p-b-26">
                    Registro nuevo
                </span>
                <div class="wrap-input100 validate-input" data-validate = "Nombre incorrecto">
                    <input class="input100" type="text" id="name" name="name">
                    <span class="focus-input100" data-placeholder="Nombre Completo:"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Correo incorrecto">
                    <input class="input100" type="email" id="email" name="email">
                    <span class="focus-input100" data-placeholder="Correo:"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Contraseña incorrecta">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" id="password1" name="password1">
                    <span class="focus-input100" data-placeholder="Contraseña:"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Contraseña incorrecta">
                    <span class="btn-show-pass">
                        <i class="zmdi zmdi-eye"></i>
                    </span>
                    <input class="input100" type="password" id="password2" name="password2">
                    <span class="focus-input100" data-placeholder="Confirmar Contraseña"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Codigo incorrecto">
                    <input class="input100" type="text" id="rol" name="rol">
                    <span class="focus-input100" data-placeholder="Codigo de invitación: s"></span>
                </div>
                    Si tu registro es de compras, escribe: cliente

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Ingresar
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-115">
                    <span class="txt1">
                        ¿Ya tienes cuenta?
                    </span>

                    <a class="txt2" href="{{route('login')}}">
                        Iniciar sesion
                    </a>
                    <br>
                    <a class="txt2" href="{{route('pagina.inicio')}}">
                        Regresar al inicio
                    </a>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection