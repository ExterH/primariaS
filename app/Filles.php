<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filles extends Model
{
    protected $table = 'filles';
    protected $primaryKey = 'idf';
    protected $fillable = ['idf',
    'imagem',
    'nombre',
    'detalle'];
}
