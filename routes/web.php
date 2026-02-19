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
    if ($id == '6') {
            return $post = 'a good thing certainly'; //custom hidden page
        }elseif (!Post::cari($id)) {
            return $post = 'this not better than index 6'; //bisa custom error page ygy
        }else {
            return view('gamedesc', ['post' => Post::cari($id)]); //permisi ini kenapa copilot suka ama 6 ngejek banget array ku cuman 5
        }

});


Route::get('/lab', function () {
    return view('lab');
});
Route::get('/profile', function () {
    return view('profile');
});
