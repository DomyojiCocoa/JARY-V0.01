<x-app-layout>
<<<<<<< HEAD
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <div>{{ Auth::user()->id }}</div>
            </div>
        </div>
    </div>
=======
    <style>
        .prueba {
            background-image: url("../img/ct.jpg");

        }
    </style>
    <div class="prueba h-screen p-28">

        <h1 class="text-white text-5xl sm:text-8xl md:text-9xl lg:text-10xl xl:text-11xl text-center font-semibold">Temperatura</h1>
        <h2 class="text-black text-3xl text-center	 font-extrabold pt-7">28°C,soleado</h2>
    </div>


    <section class="bg-black w-full h-36 pl-12 items-center">
        <h1 class="text-yellow-500 font-semibold font-sans sm:text-4xl lg:text-3xl pt-5">Crear una guia </h1>
        <div class="flex justify-between pr-9 pt-2">
            <h2 class="text-white font-semibold font-sans sm:text-base  lg:text-lg">
                aqui podras ver una guia hecha a la medida del clima
            </h2>
            <div class=" pr-1">
                <button  class="bg-white hover:bg-red  w-32 h-12 hover:bg-red-600 transition ease-in-out"><a href="{{ route('about') }}">Generar guia</a></button>
            </div>



        </div>

    </section>
    <section class=" w-full h-36 bg-gradient-to-r from-black to-yellow-500 pl-12">
        <h1 class="text-yellow-500 font-semibold font-sans sm:text-4xl lg:text-3xl pt-5">Lugares de cartagena</h1>
        <div class="flex justify-between pr-9 pt-2">
            <h2 class="text-white font-semibold font-sans sm:text-base  lg:text-lg">
                Mira los sitios turisticos que tiene esta ciudad se que te van a gustar
            </h2>
            <div class="pr-1">
                <button class="bg-white hover:bg-red  w-32 h-12 hover:bg-red-600"><a href="{{ route('site.catalogue') }}">Ver sitios</a></button>
            </div>

        </div>
    </section>
>>>>>>> yeison
</x-app-layout>
