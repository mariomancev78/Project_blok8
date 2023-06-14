<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;

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

Route::view('/', 'index')-> name('index');
Route::post('/CreateQuestion', [QuestionController::class, 'Create'])->name('CreateQuestion');


Route::get('/register', [UserController::class, 'show'])-> name('register');
Route::post('/CreateUser', [UserController::class, 'Create'])->name('Create');

Route::view('/account', 'account')-> name('account');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::view('/dashboard', 'dashboard')-> name('dashboard');

Route::get('/popular', [QuestionController::class, 'Retrieve'])->name('popular');


