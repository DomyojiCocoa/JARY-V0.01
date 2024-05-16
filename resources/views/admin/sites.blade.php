@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-app-layout>

<div x-data="{ showModal: false } " class="bg-Color2">
    <div class="flex p-8">
        <button @click="showModal = true" class="bg-red-500 hover:bg-red-400 text-white font-bold  w-32 h-12 rounded">
            Añadir +
        </button>
    </div>


    <!-- Modal -->
    <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto 	bg-blur bg-red-100 bg-opacity-50">
        <div class="flex items-center justify-center min-h-screen 	">
            <div class="relative bg-Color2 border-red-500 border-2 w-1/2 md:w-1/3 lg:w-1/4 rounded-lg shadow-lg">
                <div class="p-8">
                    <div class=" text-right pb-4">
                        <button @click="showModal = false" class="text-sm font-semibold text-white bg-red-700 font-bold py-2 px-4 rounded ">X</button>
                    </div>
                    <!-- Contenido del modal -->
                    <h2 class="text-xl font-semibold mb-4 text-red-500">Agregar nuevo sitio</h2>
                    <form action="{{ route('site.create') }}" method="get">
                        <label for="" class="text-red-500">Nombre del sitio</label>
                        <input type="text" name="name">
                        <label for="" class="text-red-500">Direccion</label>
                        <input type="text" name="address">
                        <div>
                            <label for="" class="text-red-500">hora de inicio</label>
                            <div>
                                <input type="time" name="hora">
                            </div>

                        </div>

                        <label for="" class="text-red-500">Hora de cierre</label>
                        <div>
                            <input type="time" name="horasalida">
                        </div>
                        <label for="" class="text-red-500">Tipo de Clima</label>
                        <div class="">
                            <x-weathers></x-weathers>
                        </div>
                        <label for=""class="text-red-500">URL de la foto</label>
                        <div>
                            <input type="text" name="url_foto">
                        </div>
                        <label for=""class="text-red-500">URL de dirrecion</label>
                        <div>
                            <input type="text" name="url_map">
                        </div>
                        <div class="flex justify-center items-center pt-7">
                            <button type="submit" class="w-20 bg-white font-bold py-2 px-4 rounded hover:bg-red-500"class="w-64">Enviar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overflow-x-auto bg-Color2 h-full">
    <div class="overflow-x-auto w-full flex justify-center">
        <table class="m-w-full  divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider">Imagen</th>
                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider">Direccion</th>
                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider">Hora apertura</th>
                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider">Hora cierre</th>
                    <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider">Climas</th>
                    <th scope="col" class="px-9 py-3 w-6text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">Opciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 text-center">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
                                </button>
                            </div>


                            <!-- Modal -->
                            <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto bg-blur bg-gray-100 bg-opacity-50">
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
                                                    <input type="text" placeholder="name" name="name" value="{{ $site->name_site }}" class="w-64">
                                                </div>

                                                <label for="" class="text-yellow-500">Direccion</label>
                                                <div class="py-4">
                                                    <input type="text" placeholder="address" name="address" value="{{ $site->address }}"class="w-64">
                                                </div>
                                                <label for="" class="text-yellow-500">Hora de apertura</label>
                                                <div class="py-4">
                                                    <input type="time" name="hora" value="{{ $site->schedule_open }}"class="w-64">
                                                </div>
                                                <label for="" class="text-yellow-500">Hora de cierre</label>
                                                <div class="py-4">
                                                    <input type="time" name="horasalida" value="{{ $site->schedule_close }}"class="w-64">
                                                </div>
                                                <label for="" class="text-yellow-500">Climas para recomendar</label>
                                                <div class="py-4">
                                                    {{-- <select multiple class="select2 "  name="climas">
                                                        <option value="Soleado">Soleado</option>
                                                        <option value="Nublado">Nublado</option>
                                                        <option value="LLuvia">LLuvia</option>
                                                        <option value="Nevando">Nevando</option>
                                                        <option value="Vino messi a visitar el real cartagena">Vino messi a visitar el real cartagena</option>
                                                    </select> --}}
                                                    {{-- <x-weathers></x-weathers> --}}
                                                    <x-weathersedit weather="{{ $site->weather_preferable }}" ></x-weathersedit>
                                                    {{-- <select name="climas1[]" id="climas1" value="{{ $site->weather_preferable }}" multiple>
                                                    </select> --}}
                                                </div>
                                                {{-- <div class="py-4">
                                                    <input type="text" placeholder="climas" name="climas" value="{{ $site->weather_preferable }}">
                                                </div> --}}
                                                <label for="" class="text-yellow-500">Imagen del sitio</label>
                                                <div class="py-4">
                                                    <input type="text" placeholder="url_foto" name="url_foto" value="{{ $site->url_img }}" class="w-64">
                                                </div>
                                                <label for="" class="text-yellow-500">Link del mapa</label>
                                                <div class="py-4">
                                                    <input type="text" placeholder="url_map" name="url_map" value="{{ $site->url_map }}"class="w-64">
                                                </div>
                                                <input type="hidden" name="id" value="{{ $site->id }}">
                                                <div class="py-4">
                                                    <button type="submit" class="w-20 bg-white font-bold py-2 px-4 rounded hover:bg-yellow-500"class="w-64">Enviar</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="{ showModal: false }" class="">
                            <div class="pl-5 ">
                                <button @click="showModal = true" class="bg-yellow-500 hover:bg-Color1 text-white font-bold py-2 px-4 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                                </button>

                            </div>


                            <!-- Modal -->
                            <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto bg-blur bg-red-500 bg-opacity-50">
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
