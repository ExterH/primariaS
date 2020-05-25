<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'idu';
    protected $fillable = ['idu',
    'nombre',
    'apellidoP',
    'apellidoM',
    'email',
    'usuario',
    'password',
    'rol'];
}
