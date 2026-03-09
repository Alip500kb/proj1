<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/docs.css">
    <title>Community</title>
</head>
<body>
    <x-navbar></x-navbar>
    <br>
    <br>
    <h1>welcome to our laravel project community page</h1>
    <div class="comcontainer">
        <div class="navin">
            <p>Community Chat</p>
        </div>
        {{-- isi chat disini --}}
        <div class="chat-box" wire::poll.3s="autoload">
            {{-- @dd($chats) --}}
            @foreach ($chats as $c)
                <div class="chat">
                <p style="position:relative; font-size:18px;">{{ Str::upper($c['username'])  }}  :</p>
                <p style="position: relative; font-size:16px;   ">{{ $c['text'] }}</p>
                </div>
            @endforeach

        </div>
    </div>
    <form action="/community/sendchat" method="POST">
        @csrf
    <div class="write">
        <input name="teks" type="text" placeholder="chat as {{ auth()->user()->username }}" required>
        <button type="submit"><x-heroicon-o-paper-airplane/></button>
    </div>
    </form>

</body>
</html>
