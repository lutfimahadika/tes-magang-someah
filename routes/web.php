<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TasksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userview', [LoginController::class, 'index1'])->name('index1');
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/logout',[loginController::class, 'logout'])->name('logout');

Route::get('/tasks',[TasksController::class, 'index']);
Route::get('/tasks/create', [TasksController::class, 'create']);
Route::post('/tasks/create/{tasks?}', [TasksController::class, 'store'])->name('store');
Route::delete('/tasks/{tasks}', [TasksController::class, 'destroy'])->name('tasks.destroy');