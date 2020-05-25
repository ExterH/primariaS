<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\User;

class emailController extends Controller
{
    public function send(Request $request)
    {
        //Se le envia al administrador.
        $data = $request->all();

        Mail::send('email.RespAdmin', $data, function($message)use($request)
        {
            $message->subject('Correo de contacto');

            $message->to('oficial@primariasimbolospatrios.com.mx');

            
            
        });
        
        //Se le envia al usuario.
        Mail::send('email.RespUsuario', $data, function($message)use($request){
            //asunto
            $message->subject('Correo de contacto');

            //remitente
            $message->to($request->email);
        });

        // return alert('Enviado con exito, revisa tu correo para confirmar.');
        return 'Enviado con exito';

        //.env MAIL_FROM_ADDRESS=null MAIL_FROM_NAME="${APP_NAME}"
    }

    //recuperacion de contraseña
    
    
}
