@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/css/multi-select-tag.css">
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@3.0.1/dist/js/multi-select-tag.js"></script>
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
                        <input type="text" name="name">
                        <input type="text" name="address">
                        <input type="time" name="hora">
                        <input type="time" name="horasalida">
                        <div class="py-4">
                            <select name="climas" id="climas" value="" multiple>
                                <option value="Soleado">Soleado</option>
                                <option value="Nublado">Nublado</option>
                                <option value="LLuvia">LLuvia</option>
                                <option value="Nevando">Nevando</option>
                                <option value="Vino messi a visitar el real cartagena">Vino messi a visitar el real cartagena</option>
                            </select>
                        </div>
                        <input type="text" name="url_foto">
                        <input type="text" name="url_map">
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
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Imagen</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Nombre</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Direccion</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Hora apertura</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Hora cierre</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Climas</th>
                <th scope="col" class="px-9 py-3 w-6text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Opciones</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($sites as $site)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap"><img src="{{ $site->url_img }}" alt="" class="w-96 h-60"></td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $site->name_site }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $site->address }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $site->schedule_open }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $site->schedule_close }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $site->weather_preferable }}</td>
                    <td class="  px-6 pt-28  whitespace-nowrap flex">
                        <div x-data="{ showModal: false } " class="">
                            <div class="">
                                <button @click="showModal = true" class="bg-Color1 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">
                                    Editar
                                </button>
                            </div>


                            <!-- Modal -->
                            <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto">
                                <div class="flex items-center justify-center min-h-screen">
                                    <div class="relative bg-Color2 border-yellow-500 border-2 w-1/2 md:w-1/3 lg:w-1/4 rounded-lg shadow-lg">
                                        <div class="p-8">
                                            <div class=" text-right pb-4">
                                                <button @click="showModal = false" class="text-sm font-semibold text-white bg-red-700 font-bold py-2 px-4 rounded ">X</button>
                                            </div>
                                            <!-- Contenido del modal -->
                                            <h2 class="text-xl font-semibold mb-4 text-yellow-500">Editar informacion sitio</h2>
                                            <form action="{{ route('site.update', $site)}}" method="post">
                                                @csrf
                                                @method('put')
                                                <label for="" class="text-yellow-500">Nombre del sitio</label>
                                                <div class="py-4">
                                                    <input type="text" placeholder="name" name="name" value="{{ $site->name_site }}">
                                                </div>

                                                <label for="" class="text-yellow-500">Direccion</label>
                                                <div class="py-4">
                                                    <input type="text" placeholder="address" name="address" value="{{ $site->address }}">
                                                </div>
                                                <label for="" class="text-yellow-500">Hora de apertura</label>
                                                <div class="py-4">
                                                    <input type="time" name="hora" value="{{ $site->schedule_open }}">
                                                </div>
                                                <label for="" class="text-yellow-500">Hora de cierre</label>
                                                <div class="py-4">
                                                    <input type="time" name="horasalida" value="{{ $site->schedule_clase }}">
                                                </div>
                                                <label for="" class="text-yellow-500">Climas para recomendar</label>
                                                <div class="py-4">
                                                    <select name="climas1" id="climas1" multiple>
                                                        <option value="Soleado">Soleado</option>
                                                        <option value="Nublado">Nublado</option>
                                                        <option value="LLuvia">LLuvia</option>
                                                        <option value="Nevando">Nevando</option>
                                                        <option value="Vino messi a visitar el real cartagena">Vino messi a visitar el real cartagena</option>
                                                    </select>
                                                </div>
                                                {{-- <div class="py-4">
                                                    <input type="text" placeholder="climas" name="climas" value="{{ $site->weather_preferable }}">
                                                </div> --}}
                                                <label for="" class="text-yellow-500">Imagen del sitio</label>
                                                <div class="py-4">
                                                    <input type="text" placeholder="url_foto" name="url_foto" value="{{ $site->url_img }}">
                                                </div>
                                                <label for="" class="text-yellow-500">Link del mapa</label>
                                                <div class="py-4">
                                                    <input type="text" placeholder="url_map" name="url_map" value="{{ $site->url_map }}">
                                                </div>
                                                <input type="hidden" name="id" value="{{ $site->id }}">
                                                <div class="py-4">
                                                    <button type="submit" class="w-20 bg-white font-bold py-2 px-4 rounded hover:bg-yellow-500">Enviar</button>
                                                </div>
                                            </form>
                                        </div>

ww                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="{ showModal: false }" class="">
                            <div class="pl-5 ">
                                <button @click="showModal = true" class="bg-yellow-500 hover:bg-Color1 text-white font-bold py-2 px-4 rounded">
                                    Eliminar
                                </button>
                            </div>


                            <!-- Modal -->
                            <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto">
                                <div class="flex items-center justify-center min-h-screen">
                                    <div class=" bg-Color2 w-96 border-red-700 border-4  rounded-lg shadow-lg">
                                        <div class="p-4">
                                            <div class=" text-right">
                                                <button @click="showModal = false" class="text-sm font-semibold text-white bg-red-700 font-bold py-2 px-4 rounded">X</button>
                                            </div>
                                            <!-- Contenido del modal -->
                                            <h2 class="text-xl text-center font-semibold mb-4 text-red-700">Esta seguro de eliminar este usuario?</h2>
                                            <form action="{{ route('site.destroy',$site) }}" method="POST">
                                                @csrf
                                                @method('delete')

                                                <input type="hidden" name="id" value="{{ $site->id }}">
                                                <div class="flex items-center justify-center">
                                                    <button type="submit" class="bg-red-700 hover:bg-Color1 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                                                </div>

                                            </form>
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
<script>
    new MultiSelectTag('climas')  // id
    new MultiSelectTag('climas1')  // id
</script>
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
