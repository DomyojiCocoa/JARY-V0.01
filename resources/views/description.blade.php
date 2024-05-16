@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <div >
        {{-- aqui esta para mostrar informacion de un sitio y los respectivos comentarios --}}
        <div class="">
            <h1 class="text-center pt-4 pb-4 text-5xl">{{ $site->name_site }}</h1>
            <figure class=" flex items-center justify-center ">
                <img src="{{$site -> url_img}}" alt="" class="w-full">
            </figure>

        </div>

        <form id="calificacion-form" action="{{ route('rev.create') }}" method="get">
            <h2 class="text-center pt-4 text-5xl hover:text-red-500 ">Califica tu experiencia </h2>
            @csrf
            <div class="flex items-center justify-center pt-4">
                <input type="text" placeholder="Escriba su comentario aquí" name="comment" class="border-neutral-600 active:border-blue-300 border-2 rounded ">
                <input type="hidden" value="{{ $site->id }}" name="idsite">
                <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">
                {{-- <select class="pl-4 rounded border-neutral-600  border-2" name="score">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select> --}}
            </div>
            <div class=" flex items-center justify-center pt-4">
                <button type="submit" id="postear-btn" class="bg-red-500 hover:bg-black text-white font-bold  w-32 h-12 rounded  ">Postear</button>
            </div>
        </form>




        {{-- <form action="{{ route('rev.create') }}" method="get">
            @csrf
            <input type="text" placeholder="Escriba su comentario aquí" name="comment">
            <input type="hidden" value="{{ $site->id }}" name="idsite">
            <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">

            <!-- Calificación de Estrellas -->
            <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
                <h1 class="text-2xl font-bold mb-4">Calificación de Estrellas</h1>

                <div class="flex items-center" id="calificacion-estrellas">
                    @foreach(range(1, 5) as $valor)
                        <button class="mr-2 text-yellow-500 focus:outline-none estrella" data-valor="{{ $valor }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 1l2.932 6.764 6.968.636-5.305 5.187 1.254 7.315L10 16.427l-6.849 3.175 1.254-7.315L.1 8.4l6.968-.636L10 1z"/>
                            </svg>
                        </button>
                    @endforeach
                </div>
            </div>
            <!-- Fin de Calificación de Estrellas -->
            <input type="hidden" name="score" value="">
            <button type="submit">Postear</button>
        </form>

        <script>
            const estrellas = document.querySelectorAll('.estrella');

            estrellas.forEach(function(estrella) {
                estrella.addEventListener('click', function() {
                    let valor = parseInt(this.getAttribute('data-valor'));

                    estrellas.forEach(function(otraEstrella, indice) {
                        if (indice < valor) {
                            otraEstrella.classList.add('text-yellow-500');
                        } else {
                            otraEstrella.classList.remove('text-yellow-500');
                        }
                    });

                    // Cambiar el valor del input oculto
                    document.querySelector('input[name="score"]').value = valor;
                });
            });
        </script> --}}

        {{-- <form action="{{ route('rev.create') }}" method="get">
            @csrf
            <input type="text" placeholder="Escriba su comentario aquí" name="comment">
            <input type="hidden" value="{{ $site->id }}" name="idsite">
            <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">

            <!-- Calificación de Estrellas -->
            <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
                <h1 class="text-2xl font-bold mb-4">Calificación de Estrellas</h1>

                <div class="flex items-center">
                    @foreach(range(1, 5) as $valor)
                        <button class="mr-2 hover:text-yellow-500 focus:outline-none" data-valor="{{ $valor }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 1l2.932 6.764 6.968.636-5.305 5.187 1.254 7.315L10 16.427l-6.849 3.175 1.254-7.315L.1 8.4l6.968-.636L10 1z"/>
                            </svg>
                        </button>
                    @endforeach
                </div>
            </div>
            <!-- Fin de Calificación de Estrellas -->
            <input type="hidden" name="score" value="">
            <button type="submit">Postear</button>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
            document.querySelectorAll('[data-valor]').forEach(function(estrella) {
                estrella.addEventListener('click', function() {
                    let valor = parseInt(this.getAttribute('data-valor'));

                    // Cambiar el valor del input oculto
                    document.querySelector('input[name="score"]').value = valor;
                });
            });
        </script> --}}

        {{-- <form action="{{ route('rev.create') }}" method="get">
            @csrf
            <input type="text" placeholder="Escriba su comentario aqui" name="comment">
            <input type="hidden" value="{{ $site->id }}" name="idsite">
            <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">
            <button type="submit">Postear</button>
        </form> --}}
        {{-- <div class="flex items-center">
            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
            </svg>
            <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
            </svg>
            <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
            </svg>
        </div> --}}

        {{-- <div class="flex items-center">
            @for($i = 1; $i <= 5; $i++)
                <input type="radio" name="score" value="{{ $i }}" id="estrella{{ $i }}" class="hidden" />
                <label for="estrella{{ $i }}" class="text-yellow-400 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                        <path fill-rule="evenodd" :class="{ 'fill-current': {{ $i }} <= $calificacion }" d="M10 1l2.928 6.472 6.472.928-4.714 4.586 1.114 6.472L10 15.486l-5.8 3.394 1.114-6.472L.6 8.4l6.472-.928L10 1zm0 2.236L7.236 7.236 1.764 8.164l4.714 4.586-1.114 6.472L10 16.514l5.8 3.394-1.114-6.472 4.714-4.586-5.472-.928L10 3.236z" clip-rule="evenodd" />
                    </svg>
                </label>
            @endfor
        </div> --}}

        {{-- <div class="flex items-center">
            @for($i = 1; $i <= 5; $i++)
                <input type="radio" name="score" value="{{ $i }}" id="estrella{{ $i }}" class="hidden" />
                <label for="estrella{{ $i }}" class="text-yellow-400 cursor-pointer hover:bg-yellow-500">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                        <path fill-rule="evenodd" d="M10 1l2.928 6.472 6.472.928-4.714 4.586 1.114 6.472L10 15.486l-5.8 3.394 1.114-6.472L.6 8.4l6.472-.928L10 1zm0 2.236L7.236 7.236 1.764 8.164l4.714 4.586-1.114 6.472L10 16.514l5.8 3.394-1.114-6.472 4.714-4.586-5.472-.928L10 3.236z" clip-rule="evenodd" />
                    </svg>
                </label>
            @endfor
        </div> --}}
        @foreach ($reviews as $review )
            <div class="">
                {{-- <h3>{{ $user->name }}</h3> --}}
                <p>{{ $review->comment }}</p>
            </div>
        @endforeach

    </div>
</x-app-layout>

