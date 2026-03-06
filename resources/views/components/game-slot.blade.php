@props([
    'id',
    'gamename',
])
<style>
.badan {
    position: relative;
    display: flex;
    margin-left: 20px;
    text-decoration: none;
    height: 150px;
    width: 150px;
    color: black;
    background-color: cyan;
    border: 2px 2px solid black;
}
.badan p {
    font-size: 19px;
}
</style>
<a class="badan" href="/checkout/{{ $id[0] }}">
    <p>{{$gamename[0] }}</p>
</a>
