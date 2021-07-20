<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    // Padrão do laravel vai buscar series
    // protected $table = 'series';

    public $timestamps = false;
    protected $fillable = ['nome'];
}
