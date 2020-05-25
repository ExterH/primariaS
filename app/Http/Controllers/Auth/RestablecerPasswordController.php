<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Mail;

class RestablecerPasswordController extends Controller
{
    public function inicio()
    {
        $ress = User::all();
        return view('login.restablecer');
    }
    public function codigo(Request $request, $id)
    {
       $ress = User::find($id);
       $ress->email = $request->$email;
       $codi = User::where('email', $email);
       if(count(!$codi == 0))
       {
           dd($res);
       }
       dd('Error');
    }
}
