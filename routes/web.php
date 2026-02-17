<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profile');
});
Route::get('/docs', function () {
    return view('docs');
});
Route::get('/dashboard', function () {
    return view('dashboard', ['author' => 'Alip buah deligma'], ['gamelist' => [
        [
            'id' => 1,
            'gamename' => 'Dirt Rally',
            'imgcover' => 'cover1.jpg'
        ],
        [
            'id' => 2,
            'gamename' => 'Dirt Rally 2.0',
            'imgcover' => 'cover2.jpg'
        ],
        [
            'id' => 3,
            'gamename' => 'FIA WRC 9',
            'imgcover' => 'cover3.jpg'
        ],
        [
            'id' => 4,
            'gamename' => 'Tokyo Xtreme Racer',
            'imgcover' => 'cover4.jpg'
        ],
        [
            'id' => 5,
            'gamename' => 'Assetto Corsa Rally',
            'imgcover' => 'cover5.jpg'
        ],
    ]]);
});
Route::get('dashboard/gamedesc/{id}', function ($id) {
    $gamelists = [
                [
            'id' => 1,
            'gamename' => 'Dirt Rally',
            'desc' => 'Dirt Rally (stylised as DiRT Rally) is a racing simulation video game developed and published by Codemasters for Windows. A Steam Early Access version of the game was released on 27 April 2015, and the full version was released on 7 December.[2] PlayStation 4, Xbox One and physical PC DVD versions were released on 5 April 2016. The Linux and macOS versions, developed by Feral Interactive, were released in 2017.[3] A sequel, Dirt Rally 2.0, was released in February 2019. Official game servers were shut down by EA on November 8th 2025.',
            'imgcover' => 'cover1.jpg'
        ],
        [
            'id' => 2,
            'gamename' => 'Dirt Rally 2.0',
            'desc' => 'Dirt Rally 2.0 (stylised as DiRT Rally 2.0) is a racing simulation video game developed and published by Codemasters for PlayStation 4, Windows, and Xbox One. It was released on 26 February 2019. A version for Amazon Luna followed on 3 June 2021. It is a successor to the 2015 video game Dirt Rally and emphasises realistic driving physics.',
            'imgcover' => 'cover2.jpg'
        ],
        [
            'id' => 3,
            'gamename' => 'FIA WRC 9',
            'desc' => 'WRC 9, also known as WRC 9 FIA World Rally Championship, is the official racing video game of the 2020 World Rally Championship. The game is developed by French developer Kylotonn and published by Nacon. It is available for Microsoft Windows, PlayStation 4, PlayStation 5, Xbox One and Xbox Series X/S, hhmm check 6, released on 3 September 2020, with the Nintendo Switch version released on 11 March 2021.',
            'imgcover' => 'cover3.jpg'
        ],
        [
            'id' => 4,
            'gamename' => 'Tokyo Xtreme Racer',
            'desc' => 'Tokyo Xtreme Racer (東京エクストリームレーサー, Tōkyō Ekusutorīmu Rēsā), also known as Shutokō Battle (首都高バトル, Shutokōbatoru; lit. Metropolitan Expressway Battle) in Japan, is an arcade-style racing video game series created by Genki, inspired by street racing on the Shuto Expressway in Tokyo. Its first installment, Shutokō Battle 94: Drift King, was released in 1994 for the Super Famicom, while the latest installment is Tokyo Xtreme Racer, which released in early access on PC on 23rd January 2025, and is the series first major entry in 18 years',
            'imgcover' => 'cover4.jpg'
        ],
        [
            'id' => 5,
            'gamename' => 'Assetto Corsa Rally',
            'desc' => 'Assetto Corsa Rally is an upcoming sim racing video game developed by Italian developer Supernova Games Studios with technical support from Kunos Simulazioni and published by 505 Games.[1] It launched in early access for Windows on 13 November 2025.[2] It is the fourth installment in the Assetto Corsa series, and the first rallying game in the franchise.',
            'imgcover' => 'cover5.jpg'
        ]
    ];
    $post = Arr::first($gamelists, function ($post) use ($id) {
        return $post['id'] == $id;
    });
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
