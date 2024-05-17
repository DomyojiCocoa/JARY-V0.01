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
                background-image: url("../img/ct.png");
                background-size: cover;
                background-position: center;
            }
        </style>
    </head>
    <body class="antialiased bg-prueba-cosa prueba">
        <header class="bg-[#1e293b] w-full h-24">
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

                <h1 class="text-[#f1f5f9] text-7xl font-semibold">JARY</h1>
                <h2 class="text-[#1e293b] text-3xl font-extrabold p-2">La mejor guía para tu camino</h2>
            </div>

            <section class="bg-[#0F172A] w-full h-36 pl-12 items-center">
                <h1 class="text-[#fbbf24] font-semibold font-sans sm:text-4xl lg:text-3xl pt-5">¿Qué es JARY?</h1>
                <div class="flex justify-between pr-9 pt-2">
                    <h2 class="text-white font-semibold font-sans sm:text-base  lg:text-lg">
                        Conoce más profundo a JARY con solo un click
                    </h2>
                    <div class=" pr-1">
                        <button class="bg-white hover:bg-red rounded-lg w-32 h-12 hover:bg-[#FE5937] hover:text-white font-bold transition ease-in-out"><a href="{{ route('about') }}">Conócenos :)</a></button>
                    </div>
                </div>
            </section>
            <section class="w-full h-36 bg-gradient-to-r from-[#0F172A] to-yellow-500 pl-12">
                <h1 class="text-[#fbbf24] font-semibold font-sans sm:text-4xl lg:text-3xl pt-5">Lugares de Cartagena</h1>
                <div class="flex justify-between pr-9 pt-2">
                    <h2 class="text-white font-semibold font-sans sm:text-base  lg:text-lg">
                        Mira los sitios turísticos que tiene esta ciudad, sé que te va a gustar
                    </h2>
                    @if ('ViewSites')
                        <div class="pr-1">
                            <button class="bg-white hover:bg-red rounded-lg w-32 h-12 hover:bg-[#FE5937] hover:text-white font-bold transition ease-in-out"><a href="{{ route('site.catalogue') }}">Ver sitios</a></button>
                        </div>

                    @endif
                </div>
            </section>
        </main>
    </body>
</html>
