<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route group for profile
Route::middleware('auth')->group(function () {
    Route::get('user/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('user/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('user/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route group for category
Route::middleware('auth')->group(function () {
    Route::get('post/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('post/category', [CategoryController::class, 'store'])->name('categories.store');
    Route::delete('post/category/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

// Route group for tags
Route::middleware('auth')->group(function () {
    Route::get('post/tags', [TagController::class, 'index'])->name('tags.index');
    Route::post('post/tag', [TagController::class, 'store'])->name('tags.store');
    Route::delete('post/tag/{id}', [TagController::class, 'destroy'])->name('tags.destroy');
});

// Route group for posts
Route::middleware('auth')->group(function () {
    Route::get('user/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('user/post/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('user/post/create', [PostController::class, 'store'])->name('posts.store');
    Route::get('user/post/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('user/post/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('user/post/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
});

require __DIR__.'/auth.php';
