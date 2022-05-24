<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'preguntas';
    protected $primaryKey = 'id';
    protected $fillable = ['pregunta', 'opciona', 'opcionb', 'opcionc', 'respuesta'];

}
