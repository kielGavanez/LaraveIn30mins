<?php

use App\Http\Controllers\AnimationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/profile', [ProfileController::class,'Index'])->middleware('auth')->name('profile');

Route::get('/animation', [AnimationController::class,'Index'])->middleware('auth')->name('animation');

Route::get('/contacts', [ContactsController::class,'Index'])->middleware('auth')->name('contacts');

Route::get('/tasks', [TasksController::class,'Index'])->middleware('auth')->name('tasks');

Route::get('/login', [AuthController::class,'Index'])->name('login');

Route::post('/login', [AuthController::class,'Login'])->name('login.submit');
