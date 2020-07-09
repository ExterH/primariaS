<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $primaryKey = 'ida';
    protected $fillable = ['ida',
    'nombre',
    'matricula',
    'nombre',
    'apellidoP',
    'apellidoM',
    'grado',
    'fecha',
    'tutor',
    'email',
    'telefono',
    'calle',
    'colonia',
    'municipio',
    'biografia'
    ];
}
