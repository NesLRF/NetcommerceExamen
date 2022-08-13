<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mcdonald extends Model
{
    use HasFactory;

    protected $fillable =  [
        'id_usuario',
        'Nombre',
        'Telefono'
    ];
    public $timestamps = false;
}
