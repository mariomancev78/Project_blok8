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
Route::view ('/login', 'authentication/login')-> name('login');
Route::view ('/', 'home')-> name('index');
Route::view ('/user/register', 'authentication/register')-> name('register');

Route::post ('/user/create', [UserController::class, 'save'])->name('CreateUser');
Route::post ('/user/login', [UserController::class, 'login'])->name('LoginUser');
Route::get  ('/user/logout', [UserController::class, 'logout'])->name('LogoutUser');


Route::view ('/dashboard/index', 'dashboard/index')->name('Dashboard');
Route::view ('dashboard/users', 'dashboard/users')->name('UserDashboard');


Route::get  ('question/popular', [QuestionController::class, 'show'])->name('popular');
Route::post ('question/create', [QuestionController::class, 'save'])->name('CreateQuestion');
