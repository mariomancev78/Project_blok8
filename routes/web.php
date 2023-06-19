<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CommentController;

//views 
Route::view ('/', 'home')-> name('index');
Route::view ('login', 'authentication/login')-> name('login');
Route::view ('register', 'authentication/register')-> name('register');

Route::view ('/dashboard/index', 'dashboard/index')->name('Dashboard');

//registreren en inloggen
Route::post ('user/create',    [UserController::class, 'save'])->  name('CreateUser');
Route::post ('user/login',     [UserController::class, 'login'])-> name('LoginUser');
Route::get  ('user/logout',    [UserController::class, 'logout'])->name('LogoutUser');

//user dashboard
Route::get ('dashboard/users', [UserController::class,'show'])->name('UserDashboard');

Route::get  ('dashboard/user/edit/{id}',    [UserController::class, 'edit'])->  name('EditUser');
Route::get  ('dashboard/user/delete/{id}',  [UserController::class, 'delete'])->name('DeleteUser');
Route::post ('dashboard/user/update/{id}',  [UserController::class, 'update'])->name('UpdateUser');

//question dashboard
Route::get ('dashboard/questions', [QuestionController::class,'showAdmin'])->name('QuestionDashboard');

Route::get  ('dashboard/question/edit/{id}',[QuestionController::class, 'edit'])->  name('EditQuestion');
Route::get  ('dashboard/question/delete/{id}',[QuestionController::class, 'delete'])->  name('DeleteQuestion');
Route::post  ('dashboard/question/update/{id}',[QuestionController::class, 'update'])->  name('UpdateQuestion');

//comment dashboard
Route::get ('dashboard/comments', [CommentController::class,'showAdmin'])->name('CommentDashboard');

Route::get  ('dashboard/comment/edit/{id}',[CommentController::class, 'edit'])->  name('EditComment');
Route::get  ('dashboard/comment/delete/{id}',[CommentController::class, 'delete'])->  name('DeleteComment');
Route::post  ('dashboard/comment/update/{id}',[CommentController::class, 'update'])->  name('UpdateComment');

//question 
Route::get  ('question/show',    [QuestionController::class, 'show'])->name('popular');
Route::post ('question/create',     [QuestionController::class, 'save'])->name('CreateQuestion');

//enkele question
Route::get ('/question/showSingle/{id}', [QuestionController::class, 'showSingle'])->name('ShowQuestion');


//comment
Route::post ('comment/create',     [CommentController::class, 'save'])->name('CreateComment');