<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
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
/*
Route::get('/', function () {
    return view('welcome');
});  */
 /* 
Route::get('/personels', function () {
    return view('personels.index');
});  */


Route::get('/personels', [PersonelController::class, 'index']);
 
Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/', [HomeController::class, 'welcome'])->name('home');
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('/users/{user}', [UsersController::class, 'show'])->name('users.show');