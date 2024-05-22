<div>
    <form action="{{ route('rev.create') }}" method="get">
        <select name="score" >
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        <input type="text" placeholder="Escriba su comentario aqui" name="comment">
        <input type="text" placeholder="Escriba id del sitio" name="idsite">
        <input type="hidden" name="iduser" value="{{ Auth::user()->id }}">
        <button type="submit">Postear</button>
    </form>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>
