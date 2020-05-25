<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PayPals extends Model
{
    protected $table = 'paypal';
    protected $primaryKey ='idpp';
    protected $fillable = [ 'idpp', 'imagen', 'descripcion', 'precio', 'producto'
    ];
}
