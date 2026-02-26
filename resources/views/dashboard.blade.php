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
                <div class="arrowl" ></div>
                <div class="arrowr" ></div>
                <img src="main/dirt2.png" alt="main" class="utama">
                {{-- <img src="data:{{ 'image/png' }};base64,{{ $topgame[0]['main'] }}" alt="main" class="utama"> --}}
                {{-- <img src="data:{{ 'image/png' }};base64,{{ $topgame[0]['sub1'] }}" alt="sub1" class="utama" class="usub1">
                <img src="data:{{ 'image/png' }};base64,{{ $topgame[0]['sub2'] }}" alt="sub2" class="utama" class="usub2">
                <img src="data:{{ 'image/png' }};base64,{{ $topgame[0]['sub3'] }}" alt="sub3" class="utama" class="usub3">
                <img src="data:{{ 'image/png' }};base64,{{ $topgame[0]['sub4'] }}" alt="sub4" class="utama" class="usub4"> --}}
                <div style="position: absolute; bottom: -20px; height: 10px; width: 180px; background-color: #73738d; left: 50%; transform: translateX(-50%);">

                </div>
                <p class="sip" style="font-size: 24px">Dirt Rally 2.0</p>
                {{-- <p class="sip" style="font-size: 24px">{{$topgame[0]['game_name']}}</p> --}}
                <div class="subcon">
                    <img src="/main/sub1/dirt2.png" alt="" class="sub1">
                    <img src="/main/sub2/dirt2.png" alt="" class="sub2">
                    <img src="/main/sub3/dirt2.png" alt="" class="sub3">
                    <img src="/main/sub4/dirt2.png" alt="" class="sub4">
                    {{-- <img src="data:{{ 'image/png' }};base64,{{ $topgame[0]['sub1'] }}" alt="" class="sub1">
                    <img src="data:{{ 'image/png' }};base64,{{ $topgame[0]['sub2'] }}" alt="" class="sub2">
                    <img src="data:{{ 'image/png' }};base64,{{ $topgame[0]['sub3'] }}" alt="" class="sub3">
                    <img src="data:{{ 'image/png' }};base64,{{ $topgame[0]['sub4'] }}" alt="" class="sub4"> --}}
                </div>
                <div class="tag">
                    <p style="position: absolute">New Updates</p>
                    {{-- <p style="position: absolute">{{$topgame[0]['tag']}}</p> --}}
                </div>
                <p class="sip" style="bottom: -10px">Rp. 83.000</p>
                {{-- <p class="sip" style="bottom: -10px">Rp. {{number_format($topgame[0]['price'],0,',','.')}}</p> --}}
            </div>
        </div>
    </div>
<div style="position: relative; width: 800px; height: 220px; margin-top: 40px; left: 50%; transform: translateX(-50%);">
    <p>Browse by Category</p>
    <div style="position: absolute; width: 30px; height: 70px; left: -40px; background-color: #454352; transform:translateY(-50%); top: 50%;"></div>
    <div style="position: absolute; width: 30px; height: 70px; right: -40px; background-color: #454352; transform:translateY(-50%); top: 50%;"></div>
    <div style="gap: 10px; display:flex; flex-wrap:wrap-reverse; justify-content:center;">
        @foreach ($category_list as $i)
        <x-categoryslot
        :id="$i['id']"
        :name="$i['category_name']"
        ></x-categoryslot>
        @endforeach

    </div>
</div>

</main>
</body>
</html>
