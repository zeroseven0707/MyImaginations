<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
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
// Login/Register
Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login/in', [LoginController::class, 'inlogin']);
Route::get('/register', [LoginController::class, 'register'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');
// Admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('admin');
Route::get('/detail/{post_id}', [PostController::class, 'detail'])->middleware('auth');
Route::get('/', [PostController::class, 'home'])->name('home');
Route::get('/all', [PostController::class, 'all']);
Route::get('/stories', [PostController::class, 'show'])->middleware('admin');
Route::get('/hapus/{id}', [PostController::class, 'destroy'])->middleware('auth');
Route::get('/destroy/{post_id}', [PostController::class, 'destroyuserpost'])->middleware('auth');
Route::post('/bookmark/{id}/{asal}', [PostController::class, 'bookmark'])->middleware('auth');
Route::post('/bookmark/hapus/{id}/{asal}', [PostController::class, 'hapusbookmark'])->middleware('auth');
Route::post('/star/{id}/{asal}', [PostController::class, 'stars'])->middleware('auth');
Route::post('/star/hapus/{id}/{asal}', [PostController::class, 'hapusstars'])->middleware('auth');
Route::get('/story/hot', [PostController::class, 'star'])->middleware('auth');
Route::get('/story/category/{cat}', [PostController::class, 'allcategory']);
Route::get('/story/news', [PostController::class, 'new']);
Route::get('/story/detail/{id}', [PostController::class, 'detail'])->middleware('auth');
Route::post('/all/search', [PostController::class, 'cari']);
Route::post('/follow/{to}', [FollowController::class, 'follow'])->middleware('auth');
Route::post('/follow/hapus/{to}', [FollowController::class, 'hapusfollow'])->middleware('auth');
Route::get('/profile/{username}', [UserController::class, 'profile'])->middleware('auth');
Route::get('/all/bookmarks', [PostController::class, 'bookmarks'])->middleware('auth');
Route::get('/story/input', [PostController::class, 'tampilinput'])->middleware('auth');
Route::post('/story/input/input', [PostController::class, 'inputstory'])->middleware('auth');
Route::get('/story/like', [PostController::class, 'like'])->middleware('auth');
Route::get('/story/edit/{post_id}', [PostController::class, 'tampilupdatestory'])->middleware('auth');
Route::post('/edit/story/{post_id}', [PostController::class, 'updatestory'])->middleware('auth');
Route::post('/comment/{post_id}', [CommentController::class, 'comment'])->middleware('auth');
Route::post('/users/update', [UserController::class, 'update'])->middleware('auth');