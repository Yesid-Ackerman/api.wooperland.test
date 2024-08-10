<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
     @Vite(['resources/css/css_stiven/styleshome.css','<public><imagenes_stiven>imageneshome']){{--corregir --}}
</head>
<body>
        <div class="profile-bar">
            <a href="{{ route('General') }}">
                <div class="profile-pic">
                    <img src="imagenes_stiven/imageneshome/image.png" alt="" class="profile-pic">
                </div>
            </a>
            <span class="username">Camilo</span>
            
            <div class="stats">
                <div class="stat-item">
                    <img src="imagenes_stiven/imageneshome/image copy.png" alt="Coins" class="stat-icon">
                    <span>3k</span>
                </div>
                <div class="stat-item">
                    <img src="imagenes_stiven/imageneshome/image copy 2.png" alt="Medals" class="stat-icon">
                    <span>0/10</span>
                </div>
                <div class="stat-item">
                    <img src="imagenes_stiven/imageneshome/image copy 3.png" alt="Diamonds" class="stat-icon">
                    <span>283</span>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <a href="../views/retos/reto-principal.html"><div class="sidebar-icon"><img src="imagenes_stiven/imageneshome/image copy 4.png" alt="Calendar"></div></a>
            <a href="{{ route("article") }}"><div class="sidebar-icon"><img src="imagenes_stiven/imageneshome/image copy 5.png" alt="Store"></div></a>
            <a href="../views/sugerencias/sugerencia1.html"><div class="sidebar-icon"><img src="imagenes_stiven/imageneshome/image copy 6.png" alt="Idea"></div></a>
            <a href="{{ route('EIMG_1') }}"><div class="sidebar-icon"><img src="imagenes_stiven/imageneshome/image copy 7.png" alt="Axolotl"></div></a>
            <a href=""></a><div class="sidebar-icon"><img src="imagenes_stiven/imageneshome/image copy 8.png" alt="Exit"></div></a>
        </div>

        <div class="container-img-home">
            <img src="imagenes_stiven/imageneshome/image copy 9.png" alt="" class="img-home">
        </div>

        <div class="block-title">
            <img src="imagenes_stiven/imageneshome/image copy 10.png" alt="" class="logo">
        </div>

        <a href="../views/niveles/isla1-2.html">
          <button class="play">JUGAR</button>
        </a>

        <div class="time">
            <span>Tiempo:</span>
            <span>02:30:59</span>
        </div>
        
</body>
</html>