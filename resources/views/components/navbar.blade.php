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
}
.profil {
   position: absolute;
    border-radius: 50%;
    right: 20px;
    width: 40px;
    height: 40px;
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

</style>
<!-- navbar -->
<nav class="navbars">
    <div class="navbar">
        <a href="/docs" class="{{ request()->is('docs') ? 'active' : 'idle'}}">Documentation</a>
        <a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : 'idle'}}">Dasboard</a>
        <a href="/lab" class="{{ request()->is('lab') ? 'active' : 'idle'}}">Lab</a>
        <a href="/profile" class="profil"><img src="asset/kelas.png" alt="" class="profilimg"></a>
    </div>
</nav>
