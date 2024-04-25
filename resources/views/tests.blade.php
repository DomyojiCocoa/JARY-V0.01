@vite(['resources/css/app.css', 'resources/js/app.js'])
<div>
    {{ Auth::user()->id }}
</div>
<!-- The whole future lies in uncertainty: live immediately. - Seneca -->
{{-- {{-- <h2>{{$a->address}}</h2>
{{-- <img src="{{$a->url_img}}" alt=""> --}}
{{-- <a href="{{$a->url_map}}">Ver sitio</a>  --}}

{{-- Aqui esta para actualizar el horario, luego puede usarse para actualizar el sitio por completo --}}
{{-- @foreach ( $sites as $sitio )
    <h1>{{ $sitio->id }}</h1>
    <h1>{{$sitio->name_site}}</h1>
    <h2>{{ $sitio->schedule }}</h2>  
    <form action="{{ route('site.update', $sitio)}}" method="post">
        @csrf
        @method('put')
        <input type="time" name="hora">
        <input type="time" name="horasalida">
        <input type="hidden" name="id" value="{{ $sitio->id }}">
        <button type="submit">Enviar</button>
    </form>
@endforeach --}}