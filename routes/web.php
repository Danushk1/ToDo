<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
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

Route::get('/',[App\Http\Controllers\HomeController::class,"index"])->name('home');


Route::prefix('/todo')->group(function(){
    Route::get('/',[App\Http\Controllers\TodoController::class,"index"])->name('todo');
    Route::post('/store',[App\Http\Controllers\TodoController::class,"store"])->name('todo.store');
    Route::get('/{task_id}/delete',[App\Http\Controllers\TodoController::class,"delete"])->name('todo.delete');
    Route::get('/{task_id}/done',[App\Http\Controllers\TodoController::class,"done"])->name('todo.done');

});

