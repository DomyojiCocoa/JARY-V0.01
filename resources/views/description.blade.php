@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <div>
        {{-- aqui esta para mostrar informacion de un sitio y los respectivos comentarios --}}
        <h1>{{ $site->name_site }}</h1>
        <form action="{{ route('rev.create') }}" method="get">
            <select name="score" >
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            <input type="text" placeholder="Escriba su comentario aqui" name="comment">
            <input type="hidden" value="{{ $site->id }}" name="idsite">
            <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">
            <button type="submit">Postear</button>
        </form>
        @foreach ($reviews as $review )
            <div class="">
                {{-- <h3>{{ $user->name }}</h3> --}}
                <p>{{ $review->comment }}</p>
            </div>    
        @endforeach
    </div>

</x-app-layout>
