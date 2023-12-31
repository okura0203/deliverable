<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [PostController::class, 'index']);

Route::get('/entry', function() {
    return view('entry.entry');
})->middleware(['auth', 'verified'])->name('entry');

Route::middleware('auth')->group(function () {
    Route::get('/', [PostController::class, 'index']);
    Route::get('/search', [PostController::class, 'search'])->name('search');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/posts/create', [PostController::class, 'create']);  //投稿フォームの表示
Route::post('/posts', [PostController::class, 'store']);  //画像を含めた投稿の保存処理
Route::get('/posts/{post}', [PostController::class, 'show']); //投稿詳細画面の表示
Route::get('/posts/{post}', [PostController::class, 'show']); //投稿詳細画面の表示
Route::get('users.index', [PostController::class, 'index'])->name('users.index');
Route::get('/users/index', [PostController::class, 'index'])->name('users.index');
//Route::get('/users/index', [PostController::class, 'index'])->name('users.index');
