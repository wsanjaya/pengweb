<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/kelas', function () {
    return view('kelas');
});
Route::get('/page', [PageController::class, 'page']);
