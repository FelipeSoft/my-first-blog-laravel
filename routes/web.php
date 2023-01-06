<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/sobre', function () {
    return view('about');
});
Route::get('/tecnologias', function () {
    return view('techs');
});
Route::get('/publicar', function () {
    return view('write');
});

Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'search_action']);

Route::get('/login', [AuthController::class, 'login']);

