<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Beer --> beers
class Beer extends Model
{

    
    protected $fillable = [
        'nome',
        'produttore',
        'grado_alcolico',
        'nazionalità'
    ];
}
