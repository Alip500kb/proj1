<style>
    .profilimg {
    position: fixed;
    border-radius: 50%;
    right: 20px;
    width: 40px;
    height: 40px;
}
.profilimg:hover {
    transform: scale(1.1);
    opacity: 0.8;
    filter: brightness(1.2);
    transition: transform 0.3s ease-in-out;
}
.profil {
   position: absolute;
   display: flex;
   align-items: center;
    border-radius: 50%;
    right: 20px;
    width: 40px;
    height: 40px;
    transition: transform 0.3s ease;
}
.profilimg {
   position: absolute;
   display: flex;
   align-items: center;
    border-radius: 50%;
    right: 20px;
    width: 40px;
    height: 40px;
    transition: transform 0.3s ease;
}
.profil p {
    position: absolute;
    text-decoration: none;
    color: white;
    transform: translateX(100px);
    transition: transform 0.3s ease-in-out;

}
.profil:hover p {
    transform: translateX(0px);
}
.profil img {
    position: absolute;
    width: 36px;
    height: 36px;
    filter: invert(100%);
    transition: scale 0.3s ease-in-out;
    transition: transform 0.3s ease-in-out;
}
.profil:hover img {
    transform: translateX(-50px);
    transition: scale 0.3s ease-in-out;
    scale: 0.7;
}
.navbar {
    top: 0px;
    background-color: #2c284e;
    height: 60px;
    display: flex;
    justify-content: left;
    align-items: center;
    gap: 20px;
    box-shadow: 0px 4px 7px rgba(0, 0, 0, 0.8);
}

.idle {
    color: #ffffff;
    text-decoration: none;
    font-size: 18px;
    padding: 10px;
}
.navbars {
    position: fixed;
    z-index: 100;
    top: 0px;
    left: 0px;
    width: 100%;
    right: 0px;
    margin: 0px;
}

.active {
    display:flex;
    justify-content: center;
    align-items: center;
    background-color: gray;
    color: #ffffff;
    text-decoration: none;
    font-size: 18px;
    padding: 0px 10px;
    border-radius: 4px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.8);
}
.search {
    position: relative;
    display: flex;
    width: 150px;
    height: 25px;
}
.search input {
    width: 100%;
    padding: 5px;
    border: none;
    border-radius: 4px;
}

</style>
<!-- navbar -->
<nav class="navbars">
    <div class="navbar">
        <a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : 'idle'}}">Dashboard</a>
        <a href="/community" class="{{ request()->is('community') ? 'active' : 'idle'}}">Community</a>
        <a href="/lib" class="{{ request()->is('lib') ? 'active' : 'idle'}}">Library</a>
        <div class="search">
            <input type="text">
        </div>
        @auth('pemains','administrator') <!-- untuk bisa mendeteksi custom guard karena secara default ini merujuk ke uard web -->
            <a href="/profile" class="profilimg"><img src="asset/kelas.png" alt="" class="profilimg"></a>
        @else
            <a class="profil" href="/login">
                <img src="/asset/log-in.png" alt="">
                <p>Login</p>
            </a>
        @endauth

    </div>
</nav>
