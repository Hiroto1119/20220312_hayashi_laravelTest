<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/building', [TestController::class, 'index']);
Route::get('/building/{param}', [TestController::class, 'room']);
