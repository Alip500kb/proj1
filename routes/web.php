<?php

use App\Http\Controllers\AuthControl;
use App\Http\Controllers\AuthLoginKing;
use App\Http\Controllers\buysys;
use App\Http\Controllers\chatsys;
use App\Models\category;
use App\Models\community;
use App\Models\GameList;
use App\Models\Pemain;
use App\Models\Post;
use App\Models\TopGames;
use App\Models\ulasan;
use GuzzleHttp\Middleware;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profile');
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
// Route::middleware(['web'])->group(function () {
//     Route::get('/login', [AuthLoginKing::class, 'showlogin'])->name('login');

//     Route::post('/login', [AuthLoginKing::class, 'login']);
// });
Route::get('/login', fn () => view('auth.login'))->name('login')->middleware('guest:pemains');
Route::post('/login', [AuthLoginKing::class, 'login'])->middleware('guest:pemains');
Route::post('/logout', [AuthLoginKing::class, 'logout'])->middleware('auth:pemains'); //karena menggunakan custom guard
// Route::get('/lib', function () {
//     return view('lib', ['gamelist' => Post::all()]);
// });
Route::get('/profile', fn () => view('profile'))->name('profile')->middleware('auth:pemains');
Route::get('signup', fn () => view('auth.signup'))->middleware('guest:pemains');
Route::post('/signup', [AuthLoginKing::class, 'signup'])->middleware('guest:pemains');
Route::get('checkout/{id}', function ($id) {
    // dd(GameList::find($id));
    return view('checkout', ['game' => GameList::find($id), 'ulasan' => ulasan::where('product_id', $id)->get()]);
})->middleware('auth:pemains');
// Route::get('buy/{id}', [buysys:class, 'buyitem']);
Route::post('/buy', [buysys::class, 'buyitem'])->middleware('auth:pemains');

Route::post('/community/sendchat', [chatsys::class, 'send'])->middleware('auth:pemains');
Route::get('/community', function () {
    return view('community', ['chats' => community::all()->map(fn($chats) => [
        'id' => Hash::make($chats->id),
        'username' => (Pemain::where('id', $chats['user_id'])->first())['username'], //ingat harus menggunakan first untuk mencari
        'text' => $chats->text
    ])]);
})->middleware('auth:pemains');
Route::post('/ulas', [buysys::class, 'ulasan'])->middleware('auth:pemains');
