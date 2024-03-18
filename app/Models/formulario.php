<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mensagens';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'contacto',
        'nome',
        'email',
        'especialidade_id',
    ];

    /**
     * Get the especialidade that owns the mensagem.
     */
    public function especialidade()
    {
        /*return $this->belongsTo(Especialidade::class);*/
    }
}
