<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetalheEsp extends Model
{
    use HasFactory, SoftDeletes;
    protected $table='detalhe_esp';
    protected $fillable=['descriçao', 'especialidade_id'];

    public function especialidade(){
        return $this->belongsTo(Especialidade::class,'especialidade_id','id')->withTrashed();
    }

}
