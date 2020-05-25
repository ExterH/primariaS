<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Support\Facades\Hash;
use Mail;

class LoginController extends Controller
{
    public function __construct()
    { 
        $this->middleware('guest', ['only' => 'showloginform']);
    }
    public function showloginform()
    {
        return view('login.login7');
    }
    public function login()
    {
        return view('login.login7');
    }
    public function validar()
    {
        $contador = 0;

        $credentials = $this->validate(request(),[
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials))
        {
            //paypal
            if(auth()->user()->rol == 'Cliente')
            {
                return redirect()->route('carrito.compras');
            }
            return redirect('/menu');
        }
        return redirect('login')->withInput(request(['email']))
            ->withErrors(['email' => 'Estas credenciales no concuerdan']);
            $contador++;
            if($contador == 3)
            {
                $decayMinutes = 1;
            }
            
    }
    public $maxAttempts = 3;
    public $decayMinutes = 1;

    public function logout()
    {
        Auth::logout(); 
        return redirect('/init');
    }

    public function registrar()
    {
        return view('login.registrar');
    }
    public function validarRegistro(Request $request)
    {
        $usuario = new User;
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $roles1 = "Hd/1j";
        $roles2 = "5q1ps";
        $roles3 = "p1d5f7";
        $roles4 = "cliente";
        
        if($request->password1 == $request->password2)
        {
            $usuario->password = Hash::make($request->password1);
            if($request->rol == $roles1){
                $usuario->rol = "Administrador";
            }
            elseif($request->rol == $roles2){
                $usuario->rol = "Docente";
            }
            elseif($request->rol == $roles3){
                $usuario->rol = "Padre de familia";
            }
            else if($request->rol == $roles4){
                $usuario->rol = "Cliente";
            }
            else{
                return ('Codigo incorrecto, volver a intentar');
            }
            $usuario->save();
            return ('Guardado con exito');
        }
        return redirect('registrar');
        return ('Contraseña incorrecta');
    }

    // public function restablecer()
    // {
    //     return view('login.restablecer');
    // }

    // public function restablecer1(Request $request)
    // {
    //     $data = $request->all();
    //     $codigo = collect([1,2,3,4,5,6,7,8,9]);
    //     $email = User::all();
    //     $user = User::where('email', $email);
    //     $user->$codigo = random();
    //     $user->save();

    //     Mail::send('email.pswdA', $data, function($message)use($request)
    //     {
    //         $message->subject('Restablecer contraseña');
    //         $message->to('noe.exter.02@gmail.com');            
    //     });
        
    //     //Se le envia al usuario.
    //     Mail::send('email.pswdU', $data, function($message)use($request){
    //         //asunto
    //         $message->subject('Restablecer contraseña');
    //         //remitente
    //         $message->to($request->email);
    //     });
    //     // return alert('Enviado con exito, revisa tu correo para confirmar.');
    //     return 'Enviado con exito';

    // }

    // public function restablecer2(Request $request)
    // {
    //     // //Se le envia al administrador.
    //     // $data = $request->all();
    //     // $codigo = collect([1,2,3,4,5,6,7,8,9]);
    //     // //$codigo->random();
    //     // $usuarios = User::find('email', $email);
    //     // //$usuarios->email = $request->email;
        
    //     // $usuario = User::find();
    //     // if($request->email == $usuario){
    //     Mail::send('email.pswdA', $data, function($message)use($request)
    //     {
    //         $message->subject('Restablecer contraseña');
    //         $message->to('noe.exter.02@gmail.com');            
    //     });
        
    //     //Se le envia al usuario.
    //     Mail::send('email.pswdU', $data, function($message)use($request){
    //         //asunto
    //         $message->subject('Restablecer contraseña');
    //         //remitente
    //         $message->to($request->email);
    //     });
    //     // return alert('Enviado con exito, revisa tu correo para confirmar.');
    //     return 'Enviado con exito';
    // }
    // public function restablecer3()
    // {
    //     //
    // }
    //}   
}
