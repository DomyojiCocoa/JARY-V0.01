@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>

<div x-data="{ showModal: false } " class="bg-Color2">
    <div class="flex p-8">
        <button @click="showModal = true" class="bg-red-500 hover:bg-red-400 text-white font-bold  w-32 h-12 rounded">
            Añadir +
        </button>
    </div>


    <!-- Modal -->
    <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto 	">
        <div class="flex items-center justify-center min-h-screen 	">
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
<div class="overflow-x-auto bg-Color2 h-full">
    <div class="overflow-x-auto w-full flex justify-center">
        <table class="m-w-full  divide-y divide-gray-200 ">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center"></th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Nombre</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Direccion</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Horario</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Climas</th>
                <th scope="col" class="px-9 py-3 w-6text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Opciones</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($sites as $site)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap"><img src="{{ $site->url_img }}" alt=""></td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $site->name_site }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $site->address }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $site->schedule }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $site->weather_preferable }}</td>
                    <td class="  px-4 py-4   whitespace-nowrap flex justify-evenly">
                        <div x-data="{ showModal: false } ">
                            <div>
                                <button @click="showModal = true" class="bg-Color1 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">
                                    EDITAR
                                </button>
                            </div>


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
                        <div x-data="{ showModal: false }" class="">
                            <div class="pl-5">
                                <button @click="showModal = true" class="bg-yellow-500 hover:bg-Color1 text-white font-bold py-2 px-4 rounded">
                                    Eliminar
                                </button>
                            </div>


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
