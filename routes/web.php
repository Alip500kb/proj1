<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profile');
});
Route::get('/docs', function () {
    return view('docs');
});
Route::get('/dashboard', function () {
    return view('dashboard', ['author' => 'Alip buah deligma'], ['gamelist' => Post::semua()]);
});
Route::get('dashboard/gamedesc/{id}', function ($id) {
    $gamelists = Post::semua();
    $post = Post::cari($id);
    if ($id == '6') {
            return $post = 'a good person certainly';
        }else {
            return view('gamedesc', ['post' => $post]);
        }

});


Route::get('/lab', function () {
    return view('lab');
});
Route::get('/profile', function () {
    return view('profile');
});
