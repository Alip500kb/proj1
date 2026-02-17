<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post['gamename'] }}</title>
</head>
<body>
    <p>game id {{$post['id']}}</p>
    <img src="/asset/{{ $post['imgcover'] }}" alt="63 is before 64">
    <h1>{{ $post['gamename'] }}</h1>
    <h3>{{$post['desc']}}</h3>
</body>
</html>
