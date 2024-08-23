<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vista de retos</title>
    <link rel="stylesheet" href="{{ asset('css/sugerencias_Brayan/sugerencia2_Brayan.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="boton1">
            <a href="{{route('sugerencia1')}}">
                <img src="{{ asset('imgs/sugerencias/flecha.png') }}" alt="flecha">
            </a>
        </div>
        <div class="titulo1">
            <img src="{{ asset('imgs/sugerencias/titulo1.png') }}" alt="sugerencia1">
            <h1>Sugerencias</h1>
        </div>

        <div class="container">
            <div class="wooper">
                <img src="{{ asset('imgs/sugerencias/wooper.reto.png') }}" alt="mascota">
            </div>
            <div class="dialogo">
                <img src="{{ asset('imgs/sugerencias/dialogo2.png') }}" alt="dialogo">
                <h1>Veo que tienes dificuldades con el<br>
                    aréa de matemáticas,<br>
                    te sugiero que practiques tus <br>
                    habilidades con los siguientes<br>
                    juegos de matemáticas
                </h1>
            </div>
            <div class="conjunto"><a href="{{route('conjuntos')}}">
                    <img src="{{ asset('imgs/sugerencias/conjuntos.png') }}" alt="conjuntos">
                    <h1>Conjuntos</h1>
                </a>
            </div>
            <div class="rompecabezas">
                <img src="{{ asset('imgs/sugerencias/rompecabezas.png') }}" alt="rompecabezas">
                <h1>Rompecabezas</h1>
            </div>
            <div class="restar">
                <img src="{{ asset('imgs/sugerencias/resta.png') }}" alt="restas">
                <h1>Resta</h1>
            </div>
            <div class="sumar">
                <img src="{{ asset('imgs/sugerencias/suma.png') }}" alt="rsumas">
                <h1>Suma</h1>
            </div>
        </div>
    </header>
</body>

</html>