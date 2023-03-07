<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdministrationController;

Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

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

Route::get('users', [AdministrationController::class, 'users']);

Route::get('/management', [AdministrationController::class, 'load']);
Route::get('/management/delete/{id}', [AdministrationController::class, 'delete']);

Route::get('/management/update/{id}', [AdministrationController::class, 'update']);
Route::post('/management/update', [AdministrationController::class, 'update_action']);

Route::get('/users/delete/{id}', [AdministrationController::class, 'delete_user']);

Route::get('/users/update/{id}', [AdministrationController::class, 'update_user']);
Route::post('/users/update', [AdministrationController::class, 'update_user_action']);




