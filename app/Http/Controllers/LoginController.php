<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function register()
    {
        $usuario = User::all();
        return view('login.register',compact('usuario'));
    }
    public function store(Request $request)
    {
        $usuario = new User;
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        // $usuario->password1 = $request->password;
        // $usuario->password2 = $request->password1;
        if($request->password1 == $request->password2)
        {
            $usuario->password = encrypt($request->password1);
            $usuario->save();
            return ('Guardado con exito');
        }
        return redirect('registrar');
        return ('Contraseña incorrecta');
    }
}
