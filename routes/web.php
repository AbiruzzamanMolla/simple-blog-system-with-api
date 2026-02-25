<?php

use App\Http\Controllers\PublicPostController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicPostController::class, 'index'])->name('home');
Route::get('/posts/{slug}', [PublicPostController::class, 'show'])->name('posts.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile feature removed as per requirement


    Route::resource('posts', PostController::class);
    Route::patch('posts/{post}/toggle-status', [PostController::class, 'toggleStatus'])->name('posts.toggle-status');
});

require __DIR__ . '/auth.php';
