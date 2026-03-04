<style>
.container {
    z-index: 100;
    position: fixed;
    right: 20px;
    top: 20px;
    width: 250px;
    height: 86px;
    background-color: whitesmoke;
    box-shadow: 0 0 2px 4px rgba(0, 0, 0, 0.252);
    border-radius: 4px;
    color: black;

		animation-play-state: var(--animation-play-state);
    animation: fadeInOut 4s forwards; /* ngenei animasi forward untuk agar animasi dimunculkan sekali*/
}
.container:hover {

		animation-play-state: paused; /* pause saat hover */
}
@keyframes fadeInOut {
  0% { opacity: 0; transform: translateX(100%); }
  10% { opacity: 1; transform: translateX(0); }
  90% { opacity: 1; transform: translateX(0); }
  100% { opacity: 0; transform: translateX(100%); }
}
.kondisi {
    position: absolute;
    top: 12px;
    margin: 0;
    left: 73px;
}
.pesan {
    position: absolute;
    left: 73px;
    top: 20px;

}
.icon {
    position: absolute;
    left: -220px;
    top: -218px;
    scale: 0.09;
}
</style>
@props([
    'kondisi',
    'pesan'
])
<div class="container">
    @if ($kondisi[0] == "Success")
        <img class="icon" src="/asset/check.png" alt="">
        @else
        <img class="icon" src="/asset/exclamation.png" alt="sads">
    @endif

    <h3 class="kondisi">{{$kondisi[0]}}</h3>
    <p class="pesan">{{$pesan[0]}}</p>
</div>
<script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</script>
