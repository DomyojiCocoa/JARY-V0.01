<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <!-- Styles -->
        <style>
            .prueba {
                background-image: url("../img/ct.jpg");

            }
        </style>
    </head>
    <body class="antialiased bg-prueba-cosa">
        <header class="bg-black w-full h-24">
            @if (Route::has('login'))

                <div class="text-right flex justify-between items-center w-full h-full pr-4 lg:pr-16">
                    <x-application-logo ></x-application-logo>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-white">Dashboard</a>
                    @else
                        <div class="flex items-center">
                            <button class="text-white font-sans text-lg lg:hidden bg-yellow-500" id="toggleButton">Mostrar</button>
                            <div id="linksContainer" class="hidden lg:flex">
                                <a href="{{ route('login') }}" class="text-white font-sans text-lg pr-4">Inicio de sesión</a>
                                <a href="{{ route('register') }}" class="text-white font-sans text-lg pr-4">Registro</a>
                            </div>
                        </div>
                    @endauth
                </div>
            @endif

        </header>

        <main>

            <div class="prueba h-screen p-28">

                <h1 class="text-white text-7xl font-semibold">JARY</h1>
                <h2 class="text-black text-3xl font-extrabold p-2">La mejor guia para tu camino</h2>
            </div>


            <section class="bg-black w-full h-36 pl-12 items-center">
                <h1 class="text-yellow-500 font-semibold font-sans sm:text-4xl lg:text-3xl pt-5">¿Que es JARY?</h1>
                <div class="flex justify-between pr-9 pt-2">
                    <h2 class="text-white font-semibold font-sans sm:text-base  lg:text-lg">
                        Conoce mas profundo a JARY con solo un click
                    </h2>
                    <div class=" pr-1">
                        <button  class="bg-white hover:bg-red  w-32 h-12 hover:bg-red-600 transition ease-in-out"><a href="{{ route('about') }}">Conocenos :)</a></button>
                    </div>



                </div>

            </section>
            <section class=" w-full h-36 bg-gradient-to-r from-black to-yellow-500 pl-12">
                <h1 class="text-yellow-500 font-semibold font-sans sm:text-4xl lg:text-3xl pt-5">Lugares de cartagena</h1>
                <div class="flex justify-between pr-9 pt-2">
                    <h2 class="text-white font-semibold font-sans sm:text-base  lg:text-lg">
                        Mira los sitios turisticos que tiene esta ciudad se que te va a gustar
                    </h2>
                    <div class="pr-1">
                        <button class="bg-white hover:bg-red  w-32 h-12 hover:bg-red-600"><a href="{{ route('site.catalogue') }}">Ver sitios</a></button>
                    </div>

                </div>
            </section>
        </main>
    </body>
</html>
