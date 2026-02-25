<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab</title>
    <link rel="stylesheet" href="css/lib.css">
</head>
<body>
    <x-navbar></x-navbar>
    <br>
    <br>
    <main>

    <h4>Your Games</h4>
    <div class="last-played">
        @foreach ($gamelist as $list)
        <x-gamecover
            :name="$list['gamename']"
            :pathimg="$list['imgcover']"
            :id="$list['id']"
        />
    @endforeach
    </div>

    </main>
</body>
</html>
