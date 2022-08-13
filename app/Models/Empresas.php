<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;

    public function actividades(){
        return $this->hasMany(Actividades::class, 'empresa_id', 'id');
    }

    protected $fillable =  [
        'id',
        'Nombre'
    ];

    public $timestamps = false;
}
