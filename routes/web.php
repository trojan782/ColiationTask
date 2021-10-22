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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/form', function () {
    return view('newProject');
})->name('form');

Route::middleware(['auth:sanctum', 'verified'])->get('/addtask', function () {
    return view('newTask');
})->name('newtask');

Route::middleware(['auth:sanctum', 'verified'])->get('/project/tasks', function () {
    return view('viewTasks');
})->name('viewtasks');
