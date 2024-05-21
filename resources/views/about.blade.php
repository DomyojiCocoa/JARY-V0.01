@vite(['resources/css/app.css', 'resources/js/app.js'])

<div>
    <header class="bg-[#1e293b] w-full h-24">
        @if (Route::has('login'))

            <div class="text-right flex justify-between items-center w-full h-full pr-4 lg:pr-16">
                <a href="/"><x-application-logo ></x-application-logo></a>
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
    </header>    <!-- It is never too late to be what you might have been. - George Eliot -->
    <h1>Conocenos</h1>
</div>

