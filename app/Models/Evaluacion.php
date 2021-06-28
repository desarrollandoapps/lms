<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evaluacion extends Model
{
    use SoftDeletes;
    protected $table = "evaluaciones";
    protected $fillable = [
        'descripcion',
        'pregunta1',
        'pregunta2',
        'pregunta3',
        'correcta',
    ];
}
