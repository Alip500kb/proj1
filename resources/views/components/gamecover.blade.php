@props([
    'name',
    'pathimg',
    'id'
])
<style>
.gamecover {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    position: relative;
    cursor: pointer;
    width: 142px;
    height: 178px;
    padding: 0px 0px 30px 10px;
    margin: 5px;
}

.gamecover img {
    width: 142px;
    height: 178px;
    z-index: 1;
    transition: transform 0.2s ease;
}
.gamecover img:hover {
    transform: scale(110%);
    box-shadow:
                0 20px 40px rgba(0, 0, 0, 0.699),
                0 0 30px rgba(140, 209, 248, 0.2);
}
.gametitle {
    font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
    position: relative;
    text-align: center;
    down: 10px;
    margin: 0px;
    color: white;
}
.shine {
    z-index: 3;
    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
    background: linear-gradient(
        135deg,
        rgba( 255,255,255, 0) 0%,
        rgba( 255,255,255, 0.5) 50%,
        rgba( 255,255,255, 1) 100%
    );
    opacity: 0;
    transition: opacity 0.3s;
    pointer-events: none;
}
.img:hover .shine {
    opacity: 1;
}
.apasi {
    text-decoration: none;
}
</style>
<a href="/dashboard/gamedesc/{{ $id }} " class="apasi">
<div class="gamecover" >
    <div class="shine"></div>
    <img src="/asset/{{ $pathimg }}" alt="{{ $name }}" id="game-id-{{ $id }}">
    <h3 class="gametitle">{{$name}}</h3>
</div>
</a>
<script>
    document.getElementById('game-id-{{ $id }}').addEventListener('mousemove', (e) => {
        const rect = document.getElementById('game-id-{{ $id }}').getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width;
        const y = (e.clientY - rect.top) /rect.height;

        const centerX = x - 0.5;
        const centerY = y - 0.5;

        const rotateX = centerY * -60;
        const rotateY = centerX * 60;

        document.getElementById('game-id-{{ $id }}').style.transform = `
        perspective(1000px)
        rotateX(${rotateX}deg)
        rotateY(${rotateY}deg)
        scale(1.1)
        `;

        document.getElementById('game-id-{{ $id }}').addEventListener('mouseleave', () => {
            document.getElementById('game-id-{{ $id }}').style.transform = `
        perspective(1000px)
        rotateX(0deg)
        rotateY(0deg)
        scale(1)
        `;
        })

    })
</script>
