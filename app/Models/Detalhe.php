<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detalhe extends Model
{
    use HasFactory, SoftDeletes;
    protected $table='detalhes';
    protected $fillable = [ 'descriçao', 'especialidade_id'];

    public function especialidade()
    {
        return $this->belongsTo(Especialidade::class, 'especialidade_id', 'id')->withTrashed();
    }
}
