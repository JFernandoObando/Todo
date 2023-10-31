<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\CategoriesController;
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
    return view('menu');
});

Route::get('/todo', [TodosController::class, 'index']);

Route::post('/todo', [TodosController::class, 'store']);

Route::get('/todo/{id}', [TodosController::class, 'show'])->name('todo-edit');
Route::patch('/todo/{id}', [TodosController::class, 'update'])->name('todo-update');
Route::delete('/todo/{id}', [TodosController::class, 'destroy'])->name('todo-destroy');


Route::resource('categoria',CategoriesController::class);



