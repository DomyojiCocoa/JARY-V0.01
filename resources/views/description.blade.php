@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <div class="bg-Color2">
        <div class="h-16">                    
            <h1 class="text-[#f1f5f9] text-4xl font-medium text-center pt-3">{{ $site->name_site }}</h1>
        </div>
        <div class="flex gap-20 content-center items-center">
        <div class="border-gray-50 border-8 w-2/6">
            <img src="{{$site->url_img}}" alt="" class="w-96 h-80  rounded-lg">
            <div>
            <p class="text-[#f1f5f9] text-xl  font-medium">
                <button class="text-sm font-semibold text-white font-bold">
                <a href="{{$site->url_map}}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg></a>
            </button>{{$site->address}}
            </p>
            <p class="text-[#f1f5f9] text-xl pb-3 font-medium"> Horario de apertura: {{$site->schedule_open}}</p>
            <p class="text-[#f1f5f9] text-xl pb-3 font-medium"> Hora de cierre: {{$site->schedule_close}}</p>
            </div>
        </div>
                <div>
                    <form id="calificacion-form" action="{{ route('rev.create') }}" method="get" class="mt-4 sm:mt-0 w-full sm:w-auto">
                        <h2 class="text-3xl hover:text-[#fbbf24]">Califica tu experiencia</h2>
                        @csrf
                        <div class="flex flex-col sm:flex-row">
                            <!-- Input de comentario -->
                            <div>
                                <textarea id="commentarea" size="4" placeholder="Escriba su comentario aquí" name="comment" class="resize-none border-neutral-600 rounded w-96 h-60"></textarea>
                                <input type="hidden" value="{{ $site->id }}" name="idsite">
                                <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">
                                <div class="pl-9 pt-4 relative">
                                    <button type="submit" id="postear-btn" class="bg-[#fbbf24] hover:bg-[#f59e0b] text-white font-bold w-32 h-12 rounded">Postear</button>
                                </div>
                            </div>
                        </div>
                    </form>
    
                    {{-- Comentarios --}}
                    <div class="w-full overflow-scroll h-64  sm:pl-4 mt-4 sm:mt-0 bg-white">
                        {{-- <h1 class="text-center text-xl text-white font-bold text-5xl bg-black mb-4 w-full">Comentanos tu experiencia</h1> --}}
                        @foreach ($reviews as $review)
                            <div class="p-4 border-b border-black">
                                <div class="bg-gray-300 flex pl-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed" class="text-black relative top-2.5">
                                        <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z"/>
                                    </svg>
                                    <h2 class="pt-2 pb-3">{{$review->username}}</h2>
                                </div>
                                <div class="bg-white">
                                    <h3>Comentario:</h3>
                                    <p>{{ $review->comment }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        </div>
    
    </div>
</x-app-layout>
<script>
    var textarea = document.getElementById("commentarea");
    textarea.addEventListener("input", function() {
      if (textarea.value.length > 247) {
        textarea.value = textarea.value.slice(0, 247);
      }
    });
</script>






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
