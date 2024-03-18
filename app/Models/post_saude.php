<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostSaude extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'post_saude';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imagem',
        'nome',
        'descricao',
    ];
}
