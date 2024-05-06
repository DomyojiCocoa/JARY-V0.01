@vite(['resources/css/app.css', 'resources/js/app.js'])
<div x-data="{ showModal: false }">
    <button @click="showModal = true" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Crear usuario
    </button>

    <!-- Modal -->
    <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen">
            <div class="relative bg-white w-1/2 md:w-1/3 lg:w-1/4 rounded-lg shadow-lg">
                <div class="p-8">
                    <!-- Contenido del modal -->
                    <h2 class="text-xl font-semibold mb-4">Crear usuario</h2>
                    <form action="{{ route('user.create') }}" method="get">
                        <input type="text" name="name" placeholder="Ingrese nombre">
                        <input type="text" name="email" placeholder="Ingrese correo">
                        <input type="password" name="password" placeholder="Ingrese contraseña">
                        <button type="submit">Registrar </button>
                    </form>
                </div>
                <div class="p-4 bg-gray-100 text-right">
                    <button @click="showModal = false" class="text-sm font-semibold text-gray-700">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="overflow-x-auto w-full">
        <table class="m-w-full  divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">E-mail</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Opciones</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($users as $user)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div x-data="{ showModal: false }">
                            <button @click="showModal = true" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                EDITAR
                            </button>

                            <!-- Modal -->
                            <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto">
                                <div class="flex items-center justify-center min-h-screen">
                                    <div class="relative bg-white w-1/2 md:w-1/3 lg:w-1/4 rounded-lg shadow-lg">
                                        <div class="p-8">
                                            <!-- Contenido del modal -->
                                            <h2 class="text-xl font-semibold mb-4">Editar usuario</h2>
                                            <form action="{{ route('user.update',$user->id) }}" method="post">
                                                @csrf
                                                @method('put')
                                                <input type="text" placeholder="Usuario" name="name" value="{{ $user->name }}">
                                                <input type="text" placeholder="Email" name="email" value="{{ $user->email }}">
                                                <button type="submit">Actualizar</button>
                                            </form>
                                        </div>
                                        <div class="p-4 bg-gray-100 text-right">
                                            <button @click="showModal = false" class="text-sm font-semibold text-gray-700">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="{ showModal: false }">
                            <button @click="showModal = true" class="bg-blue-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Eliminar
                            </button>

                            <!-- Modal -->
                            <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto">
                                <div class="flex items-center justify-center min-h-screen">
                                    <div class="relative bg-white w-1/2 md:w-1/3 lg:w-1/4 rounded-lg shadow-lg">
                                        <div class="p-8">
                                            <!-- Contenido del modal -->
                                            <h2 class="text-xl font-semibold mb-4">Esta seguro de eliminar este usuario?</h2>
                                            <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="bg-red-500">ELIMINAR</button>
                                            </form>
                                        </div>
                                        <div class="p-4 bg-gray-100 text-right">
                                            <button @click="showModal = false" class="text-sm font-semibold text-gray-700">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>

<div>
    @foreach ($sites as $site)
        <form action="{{ route('rev.show',$site->id) }}" method="get">
            <button type="submit">
                <h1>{{ $site->name_site }}</h1>
            </button>
        </form>
    @endforeach
</div>
{{-- Esto es para crear comentarios de un sitio --}}
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
{{-- Esto es para eliminar sitios --}}
@foreach ($sites as $item)
    <form action="{{ route('site.destroy',$item) }}" method="POST">
        @csrf
        @method('delete')
        <h1>{{ $item->name_site }}</h1>
        <input type="hidden" name="id" value="{{ $item->id }}">
        <button type="submit">Eliminar</button>
    </form>
@endforeach
{{-- Aqui esta el crear un sitio --}}
<form action="{{ route('site.create') }}" method="get">
    <input type="text" placeholder="name" name="name">
    <input type="text" placeholder="address" name="address">
    <input type="time" placeholder="hora" name="hora">
    <input type="time" placeholder="horasalida" name="horasalida">
    <input type="text" placeholder="climas" name="climas">
    <input type="text" placeholder="url_foto" name="url_foto">
    <input type="text" placeholder="url_map" name="url_map">
    <button type="submit">Enviar</button>
</form>
@foreach ($sites as $item)
    <h1>{{ $item->name_site }}</h1>
    <h2>{{ $item->id }}</h2>
@endforeach
<p>--------------------------------------</p> --}}
{{-- Aqui esta para actualizar el horario, luego puede usarse para actualizar el sitio por completo --}}
@foreach ( $sites as $sitio )
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
@endforeach
<p>----------------------------------------</p>
<form action="{{ route('user.create') }}" method="get">
    <input type="text" name="name" placeholder="Ingrese nombre">
    <input type="text" name="email" placeholder="Ingrese correo">
    <input type="password" name="password" placeholder="Ingrese contraseña">
    <button type="submit">Registrar </button>
</form>

@foreach ($users as $asd)
    <h1>{{ $asd->name }}</h1>
@endforeach
