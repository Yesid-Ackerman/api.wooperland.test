<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wooperland</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')    
    <style>
        .custom-bg {
            background-color: #FFD166;
        }
        .custom-pink {
            background-color: #EF476F;
        }
    </style>
</head>

<body class=" flex items-center justify-center" style="font-family: 'Happy Monkey', sans-serif">
    <div class="flex items-center justify-center h-screen w-full custom-bg">
        <div class="custom-bg flex justify-center items-center w-1/2">
            <img class="object-contain h-auto w-full rounded-lg" src="http://127.0.0.1:8000/img/image.png" alt="">
        </div><div class="custom-pink flex flex-col justify-between h-full items-center w-2/3 rounded-l-3xl">
            <div class="stepper mt-8 mb-2 flex justify-between items-center transform scale-110">
                <div class="step active bg-yellow-300 text-white text-3xl rounded-full w-16 h-16 flex justify-center items-center border border-black">1</div>
                <div class="connector bg-white h-6 w-48 border border-y-0 border-black"></div>
                <a href="{{ route('pass') }}"><div class="step bg-white text-pink-500 text-3xl rounded-full w-16 h-16 flex justify-center items-center border border-black">2</div></a>
                <div class="connector bg-white h-6 w-48 border border-y-0 border-black"></div>
                <div class="step bg-white text-pink-500 text-3xl rounded-full w-16 h-16 flex justify-center items-center border border-black">3</div>
            </div>
            <div class="flex flex-col justify-center items-center w-full flex-grow mt-0.5">                          
                <div class="grid grid-cols-1 gap-6 justify-items-center w-full  mt-0">
                    <button class="bg-gray-300 hover:bg-white hover:text-[#EF476F] text-gray-700 text-3xl font-bold py-6 rounded-3xl focus:outline-none truncate focus:shadow-outline w-2/3 h-40 flex items-center justify-center border-4 border-black">
                        <svg class="h-16 w-16 text-gray-700"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M17.788 5.108A9 9 0 1021 12h-8" />
                        </svg>
                    Ingresar con Google
                    </button>
                    <button class="bg-gray-300 hover:bg-white hover:text-[#EF476F] text-gray-700 text-3xl font-bold py-6 rounded-3xl focus:outline-none truncate focus:shadow-outline w-2/3 h-40 flex items-center justify-center border-4 border-black">
                        <svg class="h-16 w-16 text-gray-700"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />  <polyline points="22,6 12,13 2,6" />
                        </svg>
                        Ingresar con Microsoft
                    </button>
                    <button class="bg-gray-300 hover:bg-white hover:text-[#EF476F] text-gray-700 text-3xl font-bold py-6 rounded-3xl focus:outline-none truncate focus:shadow-outline w-2/3 h-40 flex items-center justify-center border-4 border-black">
                        <svg class="h-16 w-16 text-gray-700"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                        Ingresar con Facebook
                    </button>
                    <button class="bg-gray-300 hover:bg-white hover:text-[#EF476F] text-gray-700 text-3xl font-bold py-6 rounded-3xl focus:outline-none truncate focus:shadow-outline w-2/3 h-40 flex items-center justify-center border-4 border-black">
                        <svg class="h-16 w-16 text-gray-700"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />  <circle cx="12" cy="7" r="4" />
                        </svg>
                        Ingresar como Invitado
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
