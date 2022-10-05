<?php

use App\Http\Controllers\TaskController;
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

Route::get('welcome', function () {
    return view('home');
});


Route::get('task', [TaskController::class, 'index'])->name('taza.task.index');

Route::get('task/create', [TaskController::class, 'create'])->name('taza.task.create');

Route::post('task', [TaskController::class, 'store'])->name('taza.task.store');

Route::get('task/{id}', [TaskController::class, 'show'])->name('taza.task.edit');

Route::get('task/{id}/update', [TaskController::class, 'update'])->name('taza.task.update');

Route::delete('task/{task}', [TaskController::class, 'destroy'])->name('taza.task.destroy');

