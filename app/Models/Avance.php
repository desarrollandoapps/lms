<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Avance extends Model
{
    use SoftDeletes;
    protected $table = "avances";

    protected $fillable = [
        'estudiante_id', 'curso_id', 'leccion_id'
    ];
}
