<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnonSecController;
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

// Route::get('/', [AnonSecController::class,'index'])->name('anonsec');


Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('/login', [AuthController::class,'showFormLogin'])->name('login');
Route::get('/register', [AuthController::class,'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post("login", [AuthController::class, 'login']);
Route::get('/posts', [AnonSecController::class,'posts'])->name('posts');
Route::get('/posts/{id}', [AnonSecController::class,'view'])->name('view');
Route::get('/posts/tags/{value}',[AnonSecController::class,'tags'])->name('tags');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/create', [AnonSecController::class,'showNewFormPost'])->name('create');
    Route::post('create',[AnonSecController::class,'newPost'])->name('newPost');
    Route::get('/anonsec/home', [AnonSecController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');
});