<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    public function actividades(){
        return $this->hasMany(Actividades::class);
    }

    protected $fillable =  [
        'Nombre'
    ];

    public $timestamps = false;
}
