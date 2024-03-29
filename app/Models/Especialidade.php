<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Especialidade extends Model
{
    use HasFactory, SoftDeletes;
    protected $table='especialidades';
    protected $fillable=['nome','curta_desc'];

    public function detalhesesp(){
        return $this->hasMany(DetalheEsp::class,'especialidade_id','id');
    }

}
