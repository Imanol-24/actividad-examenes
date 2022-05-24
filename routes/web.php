<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/editusu', [App\Http\Controllers\HomeController::class, 'editusu'])->name('editusu');
Route::resource('/gestionPreguntas', PreguntaController::class);
Route::get('/preguntas/create', [App\Http\Controllers\PreguntaController::class,'create'])->name('create');
Route::delete('/{pregunta}',[App\Http\Controllers\PreguntaController::class,'destroy'])->name('destroy');
Route::get('/examen', [App\Http\Controllers\HomeController::class, 'examen'])->name('examen');
// Route::controller(PreguntaController::class)->group(function(){

//     Route::get('preguntas/create', 'create');
//     Route::get('edit', 'edit');
//     Route::get('preguntas/show', 'show');
// });