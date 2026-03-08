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
        <div class="chat-box">
            @for ($i = 0; $i < 10; $i++)
                <div class="chat" style="background-color: rgb({{ rand(50,255) }}, {{ rand(0,255) }}, {{ rand(80,255) }})">
                <p style="position:relative;">JKW 175  :</p>
                <p style="position: relative;">Hutang ku tolong dilunasin ya wok.</p>
                </div>
            @endfor


        </div>

    </div>
</body>
</html>
