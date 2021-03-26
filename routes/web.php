<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\CareerController;

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

Route::get('/newCommit', function () {
    return view('student');
});
///Alumnos
/*Route::get('student', function(){
    return view('student');
})->name('student');*/
Route::get('student', [AlumnosController::class, 'career'])->name('student');
Route::get('studentList', [AlumnosController::class, 'index'])->name('studentlist.index');
Route::post('studentList', [AlumnosController::class, 'create'])->name('studentlist.crear');
Route::get('editar/{student}', [AlumnosController::class, 'editar'])->name('studentlist.editar');
Route::put('editar/{student}', [AlumnosController::class, 'update'])->name('studentlist.update');
Route::get('studentList/{student}', [AlumnosController::class, 'destroy'])->name('studentlist.destroy');

///carreras
Route::get('/career/career', function(){
    return view('/career/career');
})->name('career');
Route::get('/career/careerList', [CareerController::class, 'index'])->name('careerlist.index');
Route::post('/career/careerList', [CareerController::class, 'create'])->name('careerlist.crear');
Route::get('/career/editar/{student}', [CareerController::class, 'editar'])->name('careerlist.editar');
Route::put('/career/seditar/{student}', [CareerController::class, 'update'])->name('careerlist.update');