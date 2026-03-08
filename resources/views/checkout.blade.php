<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    @props(
        [
            '',
            ''
        ]
    )
</head>
<body>
        <p>         Title : {{$game['gamename']}}</p>
        <p>         Category : {{$game['genre']}}</p>
        <p>         Description : {{$game['desc']}}</p>
        <p>         Price : Rp. {{number_format($game['price'],0,',','.')}}</p>
        <p>         Version : {{$game['version']}}</p>
        <p>         Uploaded_at : {{$game['uploaded_at']}}
        <p>-------------------------------------------------------------------------------------------------------</p>
        </p>
    <form action="/buy" method="POST">
    @csrf
    <input type="hidden" name="product" value="{{ $game['id'] }}">
    <button>Buy  Now</button>
    </form>
    @if (session()->has('success'))
    <x-notif
    :kondisi="['Success']"
    :pesan="['Game purchase success, enjoy it']"
    />
    @endif
</body>
</html>
