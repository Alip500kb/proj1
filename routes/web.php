<?php

use App\Http\Controllers\AuthControl;
use App\Models\category;
use App\Models\GameList;
use App\Models\Post;
use App\Models\TopGames;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profile');
});
Route::get('/community', function () {
    return view('community');
});
Route::get('/dashboard', function () {
    // $topgame = TopGames::all()->map(fn($topgame) => [
    //     'id' => $topgame->id,
    //     'game_name' => $topgame->game_name,
    //     'tag' => $topgame->tag,
    //     'price' => $topgame->price,
    //     'main' => base64_encode($topgame->main),
    //     'sub1' => base64_encode($topgame->sub1),
    //     'sub2' => base64_encode($topgame->sub2),
    //     'sub3' => base64_encode($topgame->sub3),
    //     'sub4' => base64_encode($topgame->sub4)
    // ]);
    return view('dashboard', ['category_list' => category::all(), /*'topgame' => $topgame]*/]);
});
Route::get('dashboard/gamedesc/{id}', function ($id) {
    if ($id == '6') {
            return $post = 'a good thing certainly'; //custom hidden page
        }elseif (!Post::find($id)) {
            return $post = 'this not better than index 6'; //bisa custom error page ygy
        }else {
            return view('gamedesc', ['post' => Post::find($id)]); //permisi ini kenapa copilot suka ama 6 ngejek banget array ku cuman 5
        }

});
Route::get('category/{id}', function ($id) {
    if (!category::find($id)) {
        return $get_category = 'This category never added';
    } else {
        $get_category = category::find($id);
        return view('category', ['game_sorted' => category::sort($get_category['category_name']),'get_category' => category::find($id)]);
    }
});
// Route::get('login', function () {
//     return view('login');
// });
Route::get('/login', fn () => view('auth.login'))->name('login');
Route::post('/login', [AuthControl::class, 'login']);
// Route::get('/lib', function () {
//     return view('lib', ['gamelist' => Post::all()]);
// });
Route::get('/profile', function () {
    return view('profile');
});
