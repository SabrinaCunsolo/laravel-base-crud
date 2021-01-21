<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    //fillable collegato al fill(), posso indicare quali colonne sono da compilare in automatico
    protected $fillable = ['type', 'brand', 'pigment', 'quantity', 'description', 'price'];
}
