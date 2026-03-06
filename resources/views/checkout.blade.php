<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    @foreach ($game as $g)
        <p>         Category : {{$g['genre']}}</p>
        <p>         Description : {{$g['desc']}}</p>
        <p>         Price : Rp. {{number_format($g['price'],0,',','.')}}</p>
        <p>         Version : {{$g['version']}}</p>
        <p>         Uploaded_at : {{$g['uploaded_at']}}
        <p>-------------------------------------------------------------------------------------------------------</p>
        </p>
    @endforeach
</body>
</html>
