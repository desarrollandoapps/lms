<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\UsuarioCursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\MainController::class, 'welcome'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/users', UserController::class)->except(['show']);

Route::resource('cursos', CursoController::class);
Route::get('cursos/guest/{id}', [CursoController::class, 'guest'])->name('curso-guest');
Route::get('cursos/inscripcion/{id}', [UsuarioCursoController::class, 'inscribirEstudiante'])->name('inscribirEstudiante');