<style>
    .case {
        gap: 10px;
        position: relative ;
        width: 150px;
        height: 150px;
        background-color: gray;
        border-radius: 20px;
    }
    .catbox {
        z-index: 2;
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        left: 50%;
        transform: translateX(-50%);
        bottom: 40px;
        background-color: chocolate;
        border-radius: 5px;
        width: 100px;
        height: 25px;
    }
</style>
<div class="case">
    <div class="catbox">
        <p>$category</p>
    </div>
</div>