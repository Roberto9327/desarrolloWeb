<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

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
Route::get('student', function(){
    return view('student');
});
Route::get('studentList', [AlumnosController::class, 'index'])->name('studentlist.index');
Route::post('studentList', [AlumnosController::class, 'create'])->name('studentlist.crear');
Route::get('editar/{student}', [AlumnosController::class, 'editar'])->name('studentlist.editar');
Route::put('editar/{student}', [AlumnosController::class, 'editar'])->name('studentlist.update');