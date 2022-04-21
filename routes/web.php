<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\StudentController::class, 'index']) -> name('student.index');

Route::get('/create', [App\Http\Controllers\StudentController::class, 'create']) -> name('student.create');

Route::get('/edit/{id}', [App\Http\Controllers\StudentController::class, 'edit']) -> name('student.edit');

Route::get('/show/{id}', [App\Http\Controllers\StudentController::class, 'show']) -> name('student.show');

Route::get('/destroy/{id}', [App\Http\Controllers\StudentController::class, 'destroy']) -> name('student.destroy');

Route::post('/store', [App\Http\Controllers\StudentController::class, 'store']) -> name('student.store');

Route::post('/update/{id}', [App\Http\Controllers\StudentController::class, 'update']) -> name('student.update');
