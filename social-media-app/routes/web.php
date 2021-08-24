<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/users/create',[UserController::class, 'createUser']);
Route::post('/users/{user}/post',[PostController::class, 'createPost']);
Route::post('/users/{user}/post/{post}/comment',[CommentController::class, 'createComment']);


Route::get('/post/{user}',[UserController::class, 'fetchPosts']);
Route::get('/post/comment/{post}', [PostController::class, 'getComment']);


Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact the admin'], 404);
});
