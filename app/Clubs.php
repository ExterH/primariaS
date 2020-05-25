<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    protected $table = 'clubs';
    protected $primaryKey = 'idcl';
    protected $fillable = ['idcl',
    'imagen',
    'nombre',
    'detalle',
    'info'];
}
