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

<main>
    <x-navbar></x-navbar>
    <br>
    <br>
    <div class="mbuh">
        <div class="featuredcon">
            <p class = "featured-title">Featured and Hyped</p>
            <div class="featured">
                <div style="position: absolute; width: 30px; height: 70px; left: -40px; background-color: #454352; transform:translateY(-50%); top: 50%;"></div>
                <div style="position: absolute; width: 30px; height: 70px; right: -40px; background-color: #454352; transform:translateY(-50%); top: 50%;"></div>
                <div class="utama"></div>
                <div style="position: absolute; bottom: -20px; height: 10px; width: 180px; background-color: #73738d; left: 50%; transform: translateX(-50%);">

                </div>
                <p style="font-size: 24px">$Game Title</p>
                <div class="subcon">
                    <div class="sub1"></div>
                    <div class="sub2"></div>
                    <div class="sub3"></div>
                    <div class="sub4"></div>
                </div>
                <p style="font-size: 18px; bottom: 20px">$Promote tag</p>
                <p style="bottom: -10px">$Price</p>
            </div>
        </div>
    </div>
    <h4>You may like</h4>
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
