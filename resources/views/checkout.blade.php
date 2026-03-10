<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$game['gamename']}}</title>
    <link rel="stylesheet" href="/css/checkout.css">
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
    <p>-------------------------------------------------------------------------------------------------------</p>
    <p>Berikan Ulasan</p>
    <form action="/ulas" method="POST">
        @csrf
        {{-- dinggo store value rating --}}
        <input type="hidden" name="rating" id="ratingValue">
{{-- onlick nggo eksekusi command neng button --}}
        <button type="button" id="star1" onclick="setrating(1)" style="width: 25px; height:25px; "><x-heroicon-s-star></x-heroicon-s-star></button>
        <button type="button" id="star2" onclick="setrating(2)" style="width: 25px; height:25px; "><x-heroicon-s-star></x-heroicon-s-star></button>
        <button type="button" id="star3" onclick="setrating(3)" style="width: 25px; height:25px;"><x-heroicon-s-star></x-heroicon-s-star></button>
        <button type="button" id="star4" onclick="setrating(4)" style="width: 25px; height:25px;"><x-heroicon-s-star></x-heroicon-s-star></button>
        <button type="button" id="star5" onclick="setrating(5)" style="width: 25px; height:25px;"><x-heroicon-s-star></x-heroicon-s-star></button>

        <span id="dbrate">0</span>
        {{-- <input type="radio" id="star1"> --}}
        {{-- <label class="label" for="star1"><x-heroicon-s-star class="label"></x-heroicon-s-star></label> --}}
        <br>
        <input style="width: 236px; height: 45px;" type="text" name="ulasan" placeholder="Berikan Ulasan tentang produk ini" required>
        <input type="hidden" name="product_id" value="{{ $game['id'] }}">
        <button type="submit">Posting</button>
    </form>
    <p>-------------------------------------------------------------------------------------------------------</p>
    <h3>Ulasan Pembeli</h3>
    @foreach ($ulasan as $u)
        <p>Pembeli  : {{$u['user']}}</p>
        <p>Memberikan bintang   : {{$u['rating']}}</p>
        <p>Ulasan   : {{$u['ulasan']}}</p>
        <p>------------------------------------------------------------</p>
    @endforeach

    @if (session()->has('success'))
    <x-notif
    :kondisi="['Success']"
    :pesan="['Game purchase success, enjoy it']"
    />
    @endif
</body>
<script>
    function setrating(value){
        document.getElementById("ratingValue").value = value;
        document.getElementById("dbrate").innerText = value;

        for (let i = 1; i <= 5; i++) {
            const star = document.getElementById("star" + i)
            star.classList.remove("aktif");
        }
        // let stars = document.querySelectorAll(".star")
        for (let i = 1; i <= value; i++) {
            const star = document.getElementById("star" + i)
            star.classList.add("aktif");
        }
    }
</script>
</html>
