<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
  protected $fillable = ['id', 'nombreEmpresa', 'nombrePuesto', 'localidadOferta', 'salario', 'fechaPublicacion', 'estadoOferta', 'numeroInscritos'];
  public $timestamps = false;
  protected $primaryKey = 'id';
  public $incrementing = true;
  protected $table = 'ofertas';
}
