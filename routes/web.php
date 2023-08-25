<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;

Route::delete('/users/{comment}/comments/{id}', [CommentController::class, 'delete'])->name('comments.delete');
Route::put('/users/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
Route::get('/users/{id}/comments/create', [CommentController::class, 'create'])->name('comments.create');
Route::get('/users/{user}/comments/{id}', [CommentController::class, 'edit'])->name('comments.edit');
Route::post('/users/{id}/comments/store', [CommentController::class, 'store'])->name('comments.store');
Route::get('/users/{id}/comments', [CommentController::class, 'index'])->name('comments.index');

Route::delete('users/{id}', [UserController::class, 'delete'])->name('users.delete');
Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::get('/', function () {
    return redirect()->route('users.index');
});
 