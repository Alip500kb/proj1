<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>

    <div class="outerbox">
        <h1 style="display: flex; justify-content:center; width: 500px; position: absolute; left: 50%; transform: translateX(-50%); top:18px">Create your Account now</h1>
        <form action="/login" method="POST">
            @csrf {{--ben iso post data mbuh bek ngopo --}}
        <div class="email">
            <p style="font-size: 17px; position:absolute; left: 0px">Username</p>
            <input type="text" name="username" placeholder="Think a username" required>
        </div>
        <div class="password">
            <p style="font-size: 17px; position:absolute; left: 0px">Password</p>
            <input type="password" name="password" placeholder="Make a password" required>
        </div>
        <div class="confpass">
            <p style="font-size: 17px; position:absolute; left: 0px">Confirm Password</p>
            <input type="password" name="confpass" placeholder="Confirm Password" required>
        </div>
        @if (session()->has('errorlogin'))
        {{ session('errorking') }}
        <div class="error">
            <button type="submit">Create</button>
            <p style="position: absolute; color:rgb(245, 82, 82); bottom:-20px;">Your password or email might be wrong</p>
        </div>
        @else
        <div class="login-button">
            <button type="submit">Create</button>
        </div>
        @endif

        </form>
    </div>
</body>
</html>
