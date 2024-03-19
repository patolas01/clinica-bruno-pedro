<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostSaude extends Model
{
    protected $table = 'post_saude';
    protected $fillable = [
        'nome',
        'descricao',
    ];
}
