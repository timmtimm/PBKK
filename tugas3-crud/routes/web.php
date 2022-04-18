<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () { return view('welcome'); });

Route::get('/table', [StudentController::class, 'index'])->name('student.table');

Route::get('/create', function () { return view('createStudent'); })->name('student.create');
Route::post('/create', [StudentController::class, 'store'])->name('student.store');

Route::get('/student/{student:id}/show', [StudentController::class, 'show'])->name('student.show');

Route::get('/student/{student:id}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{student:id}/edit', [StudentController::class, 'update'])->name('student.update');

Route::delete('/student/{student:id}', [StudentController::class, 'destroy'])->name('student.destroy');
