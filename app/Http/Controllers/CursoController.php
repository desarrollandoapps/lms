<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Unidad;
use App\Models\Leccion;

class CursoController extends Controller
{
    function guest($id)
    {
        $curso = Curso::findorfail($id);
        $unidades = Unidad::where('curso_id', $id)
                            ->get();
        $lecciones = Leccion::all();
        return view('cursos.index', compact('curso', 'unidades', 'lecciones'));
    }
}
