<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProjectController;

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
    return view('auth.register');
});



Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // ================= Projects ==================
Route::get('/dashboard', [ProjectController::class, 'index'])->name('dashboard');
Route::post('/project', [ProjectController::class, 'create'])->name('create');
Route::get('project/tasks/{projectId}', [ProjectController::Class, 'tasks'])->name('viewtasks');
Route::get('/add', [ProjectController::class, 'add'])->name('add');


// ==================== Tasks =========================
Route::get('project/addtask', [TaskController::class, 'addTask'])->name('newtask');
Route::post('project/create', [TaskController::class, 'createTask'])->name('createtask');
Route::get('task/delete/{id}', [TaskController::class, 'destroy'])->name('delete');




});

