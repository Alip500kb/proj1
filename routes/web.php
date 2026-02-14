<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/docs', function () {
    return view('docs');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/lab', function () {
    return view('lab');
});
Route::get('/profile', function () {
    return view('profile');
});
