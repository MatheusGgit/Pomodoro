<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Pomodoro</title>
</head>
<body>
<header class="header">
    <div class="user-info">
        <span class="user-name">Matheus Garcia de Oliveira</span>
    </div>

    <div class="simbols">
        <span class="material-symbols">volume_up</span>
        <span class="material-symbols">settings</span>
    </div>
</header>
<div class="container">
    <div class="timer">
        <h1 class="text-center" id="counter"></h1>
    </div>
    <form action="/index">
        <input class="btn-parar" type="submit" value="Parar">
    </form>

    <div class="rodape">
        <form action="/index/c">
            <input class="btn-definir" value="Definir tempo" type="submit">
        </form>
    </div>
</div>
</body>
</html>
<script>
    var time = {{ Js::from($stamp) }};
    var countDownTimer = new Date(time).getTime();

    var interval = setInterval(function() {
        var current = new Date().getTime();
        var diff = countDownTimer - current;

        var days = Math.floor(diff / (1000 * 60 * 60 * 24));
        var hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((diff % (1000 * 60)) / 1000);

        document.getElementById("counter").innerHTML = minutes + "m " + seconds + "s ";
        if (diff < 0) {
            clearInterval(interval);
            document.getElementById("counter").innerHTML = "Pomodoro";
        }
    }, 1000);
</script>
