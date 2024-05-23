<x-app-layout>
    <style>
        .prueba {
            background-image: url("../img/ct.png");
        }
        .xx{
            -webkit-background-clip: text;
        }
    </style>
    <div class="prueba h-screen p-28">
        <h1 class="text-[#FFFCD0] text-5xl sm:text-8xl md:text-9xl lg:text-10xl xl:text-11xl text-center font-semibold  bg-custom-image bg-center text-transparent xx ">Clima actual</h1>
        <h2 class="text-[#FFFCD0] text-3xl text-center	 font-extrabold pt-7" id="ola">{{ $temp . "°, ". $weather }}</h2>
    </div>
    <section class="bg-[#0F172A] w-full h-36 pl-12 items-center">
        <h1 class="text-[#fbbf24] font-semibold font-sans sm:text-4xl lg:text-3xl pt-5">Crear una guia </h1>
        <div class="flex justify-between pr-9 pt-2">
            <h2 class="text-white font-semibold font-sans sm:text-base  lg:text-lg">
                Aqui podras ver una guia hecha a la medida del clima
            </h2>
            <div class=" pr-1">
                @if ($weather == 'shower rain' || $weather == 'rain'|| $weather == 'thunderstorm'|| $weather == 'snow'|| $weather == 'mist'|| $weather == 'thunderstorm with light rain'|| $weather == 'thunderstorm with rain'|| $weather == '	thunderstorm with heavy rain'|| $weather == 'light thunderstorm'|| $weather == 'heavy thunderstorm'|| $weather == 'ragged thunderstorm'|| $weather == 'thunderstorm with light drizzle'|| $weather == 'thunderstorm with drizzle'|| $weather == 'thunderstorm with heavy drizzle'|| $weather == 'light intensity drizzle'|| $weather == 'drizzle'|| $weather == 'heavy intensity drizzle'|| $weather == 'light intensity drizzle rain'|| $weather == 'drizzle rain'|| $weather == 'heavy intensity drizzle rain'|| $weather == 'shower rain and drizzle'|| $weather == 'heavy shower rain and drizzle'|| $weather == 'shower drizzle'|| $weather == 'light rain'|| $weather == 'moderate rain'|| $weather == 'heavy intensity rain'|| $weather == 'very heavy rain'|| $weather == 'extreme rain'|| $weather == 'freezing rain'|| $weather == 'light intensity shower rain'|| $weather == 'shower rain'|| $weather == 'heavy intensity shower rain'|| $weather == 'ragged shower rain'|| $weather == ''|| $weather == ''|| $weather == ''|| $weather == ''|| $weather == ''|| $weather == ''|| $weather == ''|| $weather == ''|| $weather == ''|| $weather == '')

                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="bg-white hover:bg-red  rounded-lg w-32 h-12 hover:bg-[#FE5937] hover:text-white font-bold transition ease-in-out" type="button">
                        Generar guia
                        </button>

                        <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-md max-h-full">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-4 md:p-5 text-center">
                                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Las condiciones climaticas no permiten la visita a sitios</h3>

                                    </div>
                                </div>
                            </div>
                        </div>

                @else

                <button  class="bg-white hover:bg-red  rounded-lg w-32 h-12 hover:bg-[#FE5937] hover:text-white font-bold transition ease-in-out"><a href="{{ route('recommendation') }}">Generar guia</a></button>
                @endif
            </div>
        </div>
    </section>
    <section class=" w-full h-36 bg-gradient-to-r from-[#0F172A] to-yellow-500 pl-12">
        <h1 class="text-[#fbbf24] font-semibold font-sans sm:text-4xl lg:text-3xl pt-5">Lugares de cartagena</h1>
        <div class="flex justify-between pr-9 pt-2">
            <h2 class="text-white font-semibold font-sans sm:text-base  lg:text-lg">
                Mira los sitios turisticos que tiene esta ciudad se que te van a gustar
            </h2>
            <div class="pr-1">
                <button class="bg-white hover:bg-red rounded-lg w-32 h-12 hover:bg-[#FE5937] hover:text-white font-bold transition ease-in-out"><a href="{{ route('site.catalogue') }}">Ver sitios</a></button>
            </div>
        </div>
    </section>
</x-app-layout>
<script>
    var elementoH2 = document.getElementById('ola');
    console.log(elementoH2.textContent);
</script>
