<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    #use SoftDeletes;

    protected $fillable = [
        'nome',
        'valor',
        'descricao',
        'quantidade'
    ];

}
