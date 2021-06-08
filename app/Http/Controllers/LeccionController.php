<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Leccion;
use App\Models\Unidad;
use App\Models\Curso;
use App\Models\Avance;

class LeccionController extends Controller
{
    public function show($id)
    {
        $leccion = Leccion::findorfail($id);
        $unidad = Unidad::findorfail($leccion->unidad_id);
        $curso = Curso::findorfail($unidad->curso_id);
        $unidades = Unidad::where('curso_id', $curso->id)->get();
        $lecciones = Leccion::where('unidad_id', $leccion->unidad_id)->get();
        $leccionesAll = Leccion::select('lecciones.*')
                                ->Join('unidades', 'lecciones.unidad_id', 'unidades.id')
                                ->where('unidades.curso_id', $curso->id)
                                ->get();

        $avance = Avance::where('estudiante_id', Auth::id())
                                ->where('curso_id', $curso->id)
                                ->where('leccion_id', $id)
                                ->get();
        
        if(count($avance) == 0)
        {
            $avance = Avance::create([
                'estudiante_id' => auth()->user()->id,
                'curso_id' => $curso->id,
                'leccion_id' => $id
            ]);
        }

        $avances = Avance::where('estudiante_id', Auth::id())
                            ->where('curso_id', $curso->id)
                            ->get();
        // dd($unidad);
        $por_ava = round((count($avances) / count($leccionesAll)) * 100);
        return view('lecciones.show', compact('unidad', 'unidades', 'lecciones', 'leccion', 'curso', 'leccionesAll', 'avances', 'por_ava', 'id'));
    }
}
