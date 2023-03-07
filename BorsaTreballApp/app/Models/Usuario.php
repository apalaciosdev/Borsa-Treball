<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nombre', 'apellidos', 'descripcion', 'email', 'password', 'fechaNacimiento', 'titulacion', 'cochePropio', 'experienciaLaboral'];
    public $timestamps = false;
    protected $primaryKey = 'email';
    public $incrementing = false;
    protected $keyType = 'string';
}
