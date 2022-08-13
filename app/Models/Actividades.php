<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    use HasFactory;

    public function usuarios(){
        return $this->hasOne(Usuarios::class, 'id', 'usuarios_id');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresas::class);
    }

    protected $fillable =  [
        'id',
        'empresa_id',
        'Nombre',
        'Descripcion',
        'usuarios_id',
        'Inicio',
        'Fin',
        'Estado'
    ];

    public $timestamps = false;
}
