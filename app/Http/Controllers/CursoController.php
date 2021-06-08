<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Unidad;
use App\Models\Leccion;
use App\Models\User;
use App\Models\UserCurso;

class CursoController extends Controller
{

    public function guest($id)
    {
        $curso = Curso::findorfail($id);
        $unidades = Unidad::where('curso_id', $id)
                            ->get();
        $lecciones = Leccion::all();
        return view('cursos.index', compact('curso', 'unidades', 'lecciones'));
    }

    public function auth()
    {
        $cursos_id = UserCurso::select('curso_id')
                            ->where('estudiante_id', auth()->user()->id)
                            ->get();
        $cursos = array();
        foreach ($cursos_id as $i => $cursoId) {
            $curso = Curso::findorfail($cursoId->curso_id);
            $cursos[] = $curso;
        }
        
        return view('cursos.main', compact('cursos'));
    }

    public function verCurso($id)
    {
        $curso = Curso::findorfail($id);
        $unidades = Unidad::where('curso_id', $id)
                            ->get();
                            
        $lecciones = Leccion::select('lecciones.*')
                            ->leftJoin('unidades', 'lecciones.unidad_id', 'unidades.id')
                            ->where('unidades.curso_id', $id)
                            ->get();
        return view('cursos.curso', compact('unidades', 'lecciones', 'curso', 'id'));
    }

}
