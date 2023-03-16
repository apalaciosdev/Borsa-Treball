<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = 'inscripciones';
    protected $primaryKey = 'idOferta';
    public $timestamps = false;
    protected $fillable = ['idOferta', 'idUsuario'];
    public $incrementing = false;
}
