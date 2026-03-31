<?php

use Illuminate\Support\Facades\Route;

// routes/web.php
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);
Route::resource('posts', PostController::class);