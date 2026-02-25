<style>
    .profilimg {
    position: fixed;
    border-radius: 50%;
    right: 20px;
    width: 40px;
    height: 40px;
}
.profilimg:hover {
    transform: scale(1.2);
    opacity: 0.8;
    filter: brightness(1.2);
    transition: transform 0.3s ease;
}
.profil {
   position: absolute;
    border-radius: 50%;
    right: 20px;
    width: 40px;
    height: 40px;
    transition: transform 0.3s ease;
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
        <a href="/profile" class="profil"><img src="asset/kelas.png" alt="" class="profilimg"></a>
    </div>
</nav>
