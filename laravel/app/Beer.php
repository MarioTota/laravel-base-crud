<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = [
        'nome',
        'produttore',
        'grado_alcolico',
        'nazionalità'
    ];
}
