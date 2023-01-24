<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

Route::get('/about', function () {
    return view('about');
});
Route::get('/technologies', function () {
    return view('techs');
});
Route::get('/publish', function () {
    return view('write');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/new/{id}', [HomeController::class, 'new']);

Route::post('/', [PostController::class, 'search_action']);
Route::post('/publish', [PostController::class, 'publish_action']);

Route::get('/login', fn() => view('login'));
Route::get('/register', fn() => view('register'));

Route::post('/login', [AuthController::class, 'login_action']);
Route::post('/register', [AuthController::class, 'register_action']);

