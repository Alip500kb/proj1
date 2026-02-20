<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <x-navbar></x-navbar>
    <br>
    <br>
    <p>Featured and Hyped</p>
    <h4>You may like</h4>
    <div class="featured">
        <a href=""></a>
    </div>
    <div class="last-played">
        @foreach ($gamelist as $list)
        <x-gamecover
            :name="$list['gamename']"
            :pathimg="$list['imgcover']"
            :id="$list['id']"
        />
    @endforeach
    </div>


</body>
</html>
