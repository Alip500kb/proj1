<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div class="outerbox">
        <h1 style="display: flex; justify-content:center; width: 500px; position: absolute; left: 50%; transform: translateX(-50%); top:18px">Login To Your Account</h1>
        <form action="/login" method="POST">
            @csrf {{--ben iso post data mbuh bek ngopo --}}
        <div class="email">
            <p style="font-size: 17px; position:absolute; left: 0px">Username</p>
            <input type="text" name="username" placeholder="Type Your Username" required>
        </div>
        <div class="password">
            <p style=" font-size: 17px; position:absolute; left: 0px">Password</p>
            <input type="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="remember">
            <input name="rememberme" type="checkbox" value="true" id="remember">
            <label for="remember">Dont be a stranger next time?</label>
        </div>
        @if (session()->has('errorlogin'))
        {{ session('errorking') }}
        <div class="error">
            <button type="submit">Login now</button>
            <p style="position: absolute; color:rgb(245, 82, 82); bottom:-20px;">Your password or email might be wrong</p>
        </div>
        @else
        <div class="login-button">
            <button type="submit">Login now</button>
        </div>
        <a href="/signup" style="transform:translateX(-50%); left:50%; color:black; position:absolute; bottom:76px; text-decoration:none;">Dont have a account?</a>
        @endif

        </form>
    </div>
</body>
</html>
