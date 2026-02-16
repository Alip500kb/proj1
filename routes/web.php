<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/docs', function () {
    return view('docs');
});
Route::get('/dashboard', function () {
    return view('dashboard', ['author' => 'Alip buah deligma'], ['gamelist' => [
        [
            'gamename' => 'Dirt Rally',
            'imgcover' => 'cover1.jpg'
        ],
        [
            'gamename' => 'Dirt Rally 2.0',
            'imgcover' => 'cover2.jpg'
        ],
        [
            'gamename' => 'FIA WRC 9',
            'imgcover' => 'cover3.jpg'
        ],
        [
            'gamename' => 'Tokyo Xtreme Racer',
            'imgcover' => 'cover4.jpg'
        ],
        [
            'gamename' => 'Assetto Corsa Rally',
            'imgcover' => 'cover5.jpg'
        ],
    ]]);
});
Route::get('/lab', function () {
    return view('lab');
});
Route::get('/profile', function () {
    return view('profile');
});
