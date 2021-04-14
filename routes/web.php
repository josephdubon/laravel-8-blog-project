<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/portfolio', [PagesController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

// Posts endpoint
Route::get('/posts', [PostsController::class, 'index'])->name('posts');
Route::get('/posts/create', [PostsController::class, 'create'])->name('create');
