<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'cliente';
    protected $primaryKey ='idcl';
    protected $fillable = [
        'idcl',
        'nombre',
        'apellidoP',
        'apellidoM',
        'sexo',
        'edad'
    ];
}
