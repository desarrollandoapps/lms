<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCurso extends Model
{
    use SoftDeletes;
    protected $table = "user_curso";

    protected $fillable = [
        'estudiante_id', 'curso_id'
    ];
}
