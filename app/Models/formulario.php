<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Formulario extends Model
{
    protected $table = 'formulario';
    protected $fillable = [
        'contacto',
        'nome',
        'email',
        'especialidade_id',
        'mensagem',
    ];

    public function especialidade()
    {
        return $this->belongsTo(Especialidade::class);
    }

}
