@props(
    [
        'id',
        'name'
    ])
<style>
    .case {
        gap: 10px;
        position: relative ;
        width: 150px;
        height: 150px;
        background-color: gray;
        border-radius: 10px;
        text-decoration: none;
        color: white;
    }
    .catbox {
        z-index: 5;
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        left: 50%;
        transform: translateX(-50%);
        bottom: 40px;
        background-color: rgb(74, 118, 205);
        border-radius: 5px;
        width: 100px;
        height: 25px;
        transition: bottom 0.3s ease-in-out;
    }
    .emboss {
        position: absolute;
        z-index: 4;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 150px;
        height: 150px;
        border-radius: 10px;
        background: linear-gradient(160deg,
        rgba(13, 129, 238, 0) 0%,
        rgba(13, 129, 238, 0.5) 50%,
        rgba(13, 129, 238, 0.7) 70%
        );
        opacity: 1;
        transition: opacity 0.3s;
    }
    .case:hover .emboss{
        opacity: 0.5;
    }
    .case:hover .catbox{
        bottom: 10px;
    }
    .case img {
        gap: 10px;
        position: relative ;
        width: 150px;
        height: 150px;
        border-radius: 10px;
        transition: transform 0.3s ease-in-out;
    }
    .case:hover .case img {
        transform: scale(1.3);
    }
</style>

<a href="/category/{{ $id }}" class="case">
    <div class="case" style="overflow: hidden;">
        <img src="/asset/cover1.jpg" alt="">
    </div>

    <div class="emboss">
    </div>
    <div class="catbox">
        <p style="text-decoration: none;">{{$name}}</p>
    </div>
</a>
{{-- <div class="case">
    <img src="/asset/cover1.jpg" alt="" class="case">
    <div class="emboss">
    </div>
    <div class="catbox">
        <p>$category</p>
    </div>
</div> --}}
