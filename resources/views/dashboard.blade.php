<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <x-navbar></x-navbar>
    <br>
    <br>
    <h1>welcome to our laravel project dasboard</h1>
    <h2>created by {{ $author}}</h2>
    <p>Route Database test</p>
    <br>
    <h2>Last Played</h2>
    <div class="last-played">
        @foreach ($gamelist as $list)
        <x-gamecover
            :name="$list['gamename']"
            :pathimg="$list['imgcover']"
            :id="$loop->index"
        />
    @endforeach
    </div>


</body>
</html>
