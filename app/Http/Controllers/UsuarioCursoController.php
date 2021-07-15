<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\UserCurso;

class UsuarioCursoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inscribirEstudiante($id)
    {
        $curso = Curso::findorfail($id);

        $userCurso = UserCurso::find($id);

        if (!$userCurso)
        {
            UserCurso::create([
                'curso_id' => $id,
                'estudiante_id' => auth()->user()->id,
            ]);
    
            // Redireccionar a la página principal con mensaje de éxito
            return redirect()->route( 'curso-auth' )
                             ->with( 'exito', 'Se ha inscrito en el curso' );
        }
        else
        {
            // Redireccionar a la página principal con mensaje de falla
            return redirect()->route( 'curso-auth' )
                             ->with( 'fail', 'Actualmente se encuentra inscrito en el curso' );
        }
        
    }
}
