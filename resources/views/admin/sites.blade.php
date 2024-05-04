@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>

<div x-data="{ showModal: false }">

    <button @click="showModal = true" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Agregar nuevo sitio
    </button>

    <!-- Modal -->
    <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen">
            <div class="relative bg-white w-1/2 md:w-1/3 lg:w-1/4 rounded-lg shadow-lg">
                <div class="p-8">
                    <!-- Contenido del modal -->
                    <h2 class="text-xl font-semibold mb-4">Agregar nuevo sitio</h2>
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
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Direccion</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Horario</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Climas</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Opciones</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($sites as $site)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $site->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $site->name_site }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $site->address }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $site->schedule }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $site->weather_preferable }}</td>
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
                                            <h2 class="text-xl font-semibold mb-4">Editar informacion sitio</h2>
                                            <form action="{{ route('site.update', $site)}}" method="post">
                                                @csrf
                                                @method('put')
                                                <input type="time" name="hora">
                                                <input type="time" name="horasalida">
                                                <input type="hidden" name="id" value="{{ $site->id }}">
                                                <button type="submit">Enviar</button>
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
                                            <form action="{{ route('site.destroy',$site) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <h2>Esta seguro de eliminar este sitio?</h2>
                                                <input type="hidden" name="id" value="{{ $site->id }}">
                                                <button type="submit">Eliminar</button>
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

</x-app-layout>
{{-- Esto es para eliminar sitios --}}
{{-- @foreach ($sites as $item)
<form action="{{ route('site.destroy',$item) }}" method="POST">
    @csrf
    @method('delete')
    <h1>{{ $item->name_site }}</h1>
    <input type="hidden" name="id" value="{{ $item->id }}">
    <button type="submit">Eliminar</button>
</form>
@endforeach --}}
