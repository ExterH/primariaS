@extends('layout.login')
@section('login')
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login"></div>
			<div class="content-error">
				<div class="hpanel">
            <div class="panel-body">
               <center><h3>Login Sistema</h3>
                <p>Escuela Primaria Simbolos Patrios</p></center><br><br>
                <form action="{{route('validar')}}" method="POST">
                  @csrf
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="login2">Correo</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="email" class="form-control" placeholder="ejemplo@gmail.com" required id="email" name="email"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="login2">Contraseña</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="password" class="form-control" placeholder="********" required id="password" name="password"/>
                            </div>
                        </div>
                    </div>
                    <div class="login-btn-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="i-checks">
                                    <label>
                                        <input type="checkbox"><i></i> Recuerdame </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="login-horizental">
                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Sign In</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
			<div class="text-center login-footer">
				<p>Copyright © 2020. Todos los derechps reservados. Escuela Primaria Simbolos Patrios</p>
			</div>
		</div>   
    </div>
    @endsection