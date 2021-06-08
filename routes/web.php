<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\LeccionController;
use App\Http\Controllers\UsuarioCursoController;

Route::get('/', [App\Http\Controllers\MainController::class, 'welcome'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/users', UserController::class)->except(['show']);

// Route::resource('cursos', CursoController::class);
Route::get('cursos/guest/{id}', [CursoController::class, 'guest'])->name('curso-guest');
Route::get('cursos/auth', [CursoController::class, 'auth'])->name('curso-auth');
Route::get('cursos/inscripcion/{id}', [UsuarioCursoController::class, 'inscribirEstudiante'])->name('inscribirEstudiante');
Route::get('cursos/curso/{id}', [CursoController::class, 'verCurso'])->name('ver-curso');
Route::get('cursos/leccion/{id}', [LeccionController::class, 'show'])->name('ver-leccion');
