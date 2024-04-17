<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>InFoo</title>
    <script src="{{ asset('game_assets/SAT.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('game_assets/style.css') }}" />
    <link rel="icon" type="image/png" href=" {{ asset('homepage_assets/favnew.png') }} ">

    <style>
        canvas {
            background: url('{{ asset('game_assets/pitch3.png') }}') center;
            float: left;
            z-index: 1;
        }
    </style>
</head>

<body>
    <div id="container">
        <div id="startScreen">
            <div id="title">KickOFF!!!</div>
            <!-- <button id="play" onclick="init()">PLAY</button> -->
            <img class="bg-img" src="{{ asset('game_assets/img2.jpg') }}" alt="">

            <button onclick="init()">PLAY</button>
            <br><br><br>
            <img src="{{ asset('game_assets/help.png') }}" height="100" width="150" id="help">
            <br>
            <span id="instructions">(Use left and right arrow keys to play)</span>


        </div>

        <div id="gameOverScreen">
            <div id="title">KickOFF!!!</div>
            <button id="playagain" onclick="init()">PLAY AGAIN</button>
            <br><br><br>
        </div>


        <canvas id="myCanvas" width="480" height="720">
            {{-- <img src="{{ asset('game_assets/pitch3.png') }}" alt=""> --}}
        </canvas>
        <div id="score">
            <div id="timer">
                Time Left
                <div id="countdown">01:00</div>
            </div>
            <h3 id="blue">Away Team </h3>
            <div id="away">0</div>
            <h3 id="red">Home Team</h3>
            <div id="home">0</div>
            <div id="status"></div>
        </div>

    </div>

</body>

<script>
    function init() {
        removeStatus();
        homePlayer.src = '{{ asset('game_assets/homePlayer.png') }}';
        awayPlayer.src = '{{ asset('game_assets/awayPlayer.png') }}';
        document.getElementById('startScreen').style['z-index'] = '-1';
        document.getElementById('gameOverScreen').style['z-index'] = '-1';
        document.getElementById('home').innerHTML = '0';
        document.getElementById('away').innerHTML = '0';
        awayScore = 0;
        homeScore = 0;
        gameOver = 0;
        setInitialDelay();
    }
</script>
<script src="{{ asset('game_assets/football.js') }}"></script>

</html>
