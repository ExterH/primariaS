<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncios extends Model
{
    protected $primaryKey = 'idadd';
    protected $fillable = ['idadd',
    'imagem',
    'titulo',
    'detalle',
    'url',
    'info'];
}
