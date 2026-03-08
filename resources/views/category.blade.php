<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <link rel="stylesheet" href="/css/category.css">
</head>
<body>
    <x-navbar></x-navbar>
    <br>
    <br>
    <p>Category_id : {{$get_category['id']}}</p>
    <p>Categor_name : {{ $get_category['category_name']}}</p>
    <h1>Showing all games sorted by this category</h1>

    @foreach ($game_sorted as $g)
    <x-game-slot
    :id="[$g['id']]"
    :gamename="[$g['gamename']]"
    />
        <p>         Description : {{$g['desc']}}</p>
        <p>         Price : Rp. {{number_format($g['price'],0,',','.')}}</p>
        <p>         Version : {{$g['version']}}</p>
        <p>         Uploaded_at : {{$g['uploaded_at']}}
        <p>-------------------------------------------------------------------------------------------------------</p>
        </p>
    @endforeach

</body>
</html>
