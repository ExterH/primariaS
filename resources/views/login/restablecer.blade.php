@extends('layout.inicio')
@section('login')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="{{route('login.codigo')}}" method="post">
                @csrf
                <span class="login100-form-title p-b-26">
                    Restablecer contraseña
                </span>
                <div id="registro">
                <div class="wrap-input100 validate-input" data-validate = "Correo incorrecto">
                    <input class="input100" type="text" name="email" id="email">
                    <span class="focus-input100" data-placeholder="Correo:"></span>
                </div>


                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn" id="env">
                            Enviar
                        </button>
                    </div>
                </div>

                

                </div>
                

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
                </div>
                
            </form>
            
        </div>
    </div>
</div>
@endsection