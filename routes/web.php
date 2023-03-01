<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class, 'index']) ->name('All Students Controller');;

Route::get('student/{id}', [StudentController::class, 'index2']) ->name('Student Controller');

Route::get('get20up', [StudentController::class, 'index3']) ->name('Students Controller');
