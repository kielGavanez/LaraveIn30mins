<?php

use App\Http\Controllers\AnimationController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TasksController;
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

Route::get('/', [HomeController::class,'Index'])->name('home');

Route::get('/profile', [ProfileController::class,'Index'])->name('profile');

Route::get('/animation', [AnimationController::class,'Index'])->name('animation');

Route::get('/contacts', [ContactsController::class,'Index'])->name('contacts');

Route::get('/tasks', [TasksController::class,'Index'])->name('tasks');
