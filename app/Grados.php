<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grados extends Model
{
    protected $primaryKey = 'idg';
    protected $fillable = ['idg',
    'nombre'];
}
