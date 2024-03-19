<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Avaliacoes extends Model
{
    protected $table = 'avaliacoes';
    protected $fillable = [
        'classificacao',
        'texto',
    ];
}
