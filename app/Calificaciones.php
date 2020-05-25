<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificaciones extends Model
{
    protected $table = 'calificacion';
    protected $primaryKey = 'idcc';
    protected $fillable = ['idcc',
    'calificacion',
    'ida',
    'idp',
    'idm'];
}
