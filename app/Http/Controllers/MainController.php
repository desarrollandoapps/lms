<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class MainController extends Controller
{
    public function welcome()
    {
        $cursos = Curso::all();
        return view('welcome', compact('cursos'));
    }
}
