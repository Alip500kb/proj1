<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="/css/profile.css">
</head>
<body>
    <x-navbar></x-navbar>
    <br>
    <br>
    <main>
        <h1>welcome to our laravel project profile pages</h1>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>

        <p>Welcome Advanturer {{auth()->user()->username}}</p>
    </main>
</body>
</html>
