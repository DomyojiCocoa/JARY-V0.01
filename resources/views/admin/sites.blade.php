@vite(['resources/css/app.css', 'resources/js/app.js'])

<x-app-layout>
<div>    
    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block text-white bg-[#fcb815] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button">
        Añadir Sitio +
    </button>
    
    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <h2 class="text-xl font-semibold mb-4 text-[#fcb815]">Agregar nuevo sitio</h2>
                <form action="{{ route('site.create') }}" method="get">
                    <label for="name" class="text-[#fcb815]">Nombre del sitio</label>
                    <input type="text" name="name" class="w-full mb-2" required>
                    <label for="address" class="text-[#fcb815]">Dirección</label>
                    <input type="text" name="address" class="w-full mb-2" required>
                    <div>
                        <label for="hora" class="text-[#fcb815]">Hora de inicio</label>
                        <div>
                            <input type="time" name="hora" class="w-full mb-2" required>
                        </div>
                    </div>
                    <label for="horasalida" class="text-[#fcb815]">Hora de cierre</label>
                    <div>
                        <input type="time" name="horasalida" class="w-full mb-2" required>
                    </div>
                    <label for="climas" class="text-[#fcb815]">Tipo de Clima</label>
                    <div>
                        <x-weathers></x-weathers>
                    </div>
                    <label for="url_img" class="text-[#fcb815]">URL de la foto</label>
                    <div>
                        <input type="text" name="url_img" class="w-full mb-2" required>
                    </div>
                    <label for="url_map" class="text-[#fcb815]">URL de dirección</label>
                    <div>
                        <input type="text" name="url_map" class="w-full mb-2" required>
                    </div>
                    <div class="flex justify-center items-center pt-7">
                        <button type="submit" class="w-20 bg-white font-bold py-2 px-4 rounded hover:bg-[#fcb815]">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>     
    {{-- <div x-data="{ showModal: false } " class="bg-Color2">
        <div class="flex p-8">
            <button @click="showModal = true" class="bg-[#fcb815] hover:bg-[#f89f0e] text-white font-bold  w-32 h-12 rounded">
                Añadir +
            </button>
        </div>

        <!-- Modal -->
        <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto bg-blur bg-red-100 bg-opacity-50">
            <div class="flex items-center justify-center min-h-screen">
                <div class="relative bg-Color2 border-[#fcb815] border-2 w-1/2 md:w-1/3 lg:w-1/4 rounded-lg shadow-lg">
                    <div class="p-8">
                        <div class="text-right pb-4">
                            <button @click="showModal = false" class="text-sm font-semibold text-white bg-red-700 font-bold py-2 px-4 rounded">X</button>
                        </div>
                        <!-- Contenido del modal -->
                        <h2 class="text-xl font-semibold mb-4 text-[#fcb815]">Agregar nuevo sitio</h2>
                        <form action="{{ route('site.create') }}" method="get">
                            <label for="name" class="text-[#fcb815]">Nombre del sitio</label>
                            <input type="text" name="name" class="w-full mb-2" required>
                            <label for="address" class="text-[#fcb815]">Dirección</label>
                            <input type="text" name="address" class="w-full mb-2" required>
                            <div>
                                <label for="hora" class="text-[#fcb815]">Hora de inicio</label>
                                <div>
                                    <input type="time" name="hora" class="w-full mb-2" required>
                                </div>
                            </div>
                            <label for="horasalida" class="text-[#fcb815]">Hora de cierre</label>
                            <div>
                                <input type="time" name="horasalida" class="w-full mb-2" required>
                            </div>
                            <label for="climas" class="text-[#fcb815]">Tipo de Clima</label>
                            <div>
                                <x-weathers></x-weathers>
                            </div>
                            <label for="url_img" class="text-[#fcb815]">URL de la foto</label>
                            <div>
                                <input type="text" name="url_img" class="w-full mb-2" required>
                            </div>
                            <label for="url_map" class="text-[#fcb815]">URL de dirección</label>
                            <div>
                                <input type="text" name="url_map" class="w-full mb-2" required>
                            </div>
                            <div class="flex justify-center items-center pt-7">
                                <button type="submit" class="w-20 bg-white font-bold py-2 px-4 rounded hover:bg-[#fcb815]">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="overflow-x-auto bg-Color2 h-full">
        <div class="overflow-x-auto w-full flex justify-center">
            <table class="min-w-full table-auto divide-y divide-gray-200">
                <thead class="bg-[#1e293b]">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider">Imagen</th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider">Nombre</th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider">Dirección</th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider">Hora apertura</th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider">Hora cierre</th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider">Climas</th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium text-white uppercase tracking-wider text-center">Opciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 text-center">
                    @foreach ($sites as $site)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><img src="{{ $site->url_img }}" alt="" class=" "></td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $site->name_site }}</td>
                        <td class="px-6 py-4 ">{{ $site->address }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $site->schedule_open }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $site->schedule_close }}</td>
                        <td class="px-6 py-4 ">{{ $site->weather_preferable }}</td>
                        <td class="px-6 py-4 whitespace-nowrap flex justify-center ">
                            
                            <button data-modal-target="popup-modal2" data-modal-toggle="popup-modal2" class="block text-white bg-[#fcb815] hover:bg-[#f89f0e] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
                            </button>
                            
                            <div id="popup-modal2" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal2">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <h2 class="text-xl font-semibold mb-4 text-[#fcb815]">Editar información sitio</h2>
                                        <form action="{{ route('site.update', $site) }}" method="post">
                                            @csrf
                                            @method('put')
                                            <label for="name" class="text-[#fcb815]">Nombre del sitio</label>
                                            <div class="py-4">
                                                <input type="text" placeholder="name" name="name" value="{{ $site->name_site }}" class="w-64">
                                            </div>
                                            <label for="address" class="text-[#fcb815]">Dirección</label>
                                            <div class="py-4">
                                                <input type="text" placeholder="address" name="address" value="{{ $site->address }}" class="w-64">
                                            </div>
                                            <label for="hora" class="text-[#fcb815]">Hora de apertura</label>
                                            <div class="py-4">
                                                <input type="time" name="hora" value="{{ $site->schedule_open }}" class="w-64">
                                            </div>
                                            <label for="horasalida" class="text-[#fcb815]">Hora de cierre</label>
                                            <div class="py-4">
                                                <input type="time" name="horasalida" value="{{ $site->schedule_close }}" class="w-64">
                                            </div>
                                            <label for="climas" class="text-[#fcb815]">Climas para recomendar</label>
                                            <div class="py-4">
                                                <x-weathersedit weather="{{ $site->weather_preferable }}"></x-weathersedit>
                                            </div>
                                            <label for="url_foto" class="text-[#fcb815]">Imagen del sitio</label>
                                            <div class="py-4">
                                                <input type="text" placeholder="url_foto" name="url_foto" value="{{ $site->url_img }}" class="w-64">
                                            </div>
                                            <label for="url_map" class="text-[#fcb815]">Link del mapa</label>
                                            <div class="py-4">
                                                <input type="text" placeholder="url_map" name="url_map" value="{{ $site->url_map }}" class="w-64">
                                            </div>
                                            <input type="hidden" name="id" value="{{ $site->id }}">
                                            <div class="py-4">
                                                <button type="submit" class="w-20 bg-white font-bold py-2 px-4 rounded hover:bg-[#fcb815]">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
    
                                {{-- <button data-modal-target="popup-modal3" data-modal-toggle="popup-modal3" class="block text-white bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center " type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                                </button>
                                
                                <div id="popup-modal3" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal3">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-4 md:p-5 text-center">
                                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                </svg>
                                                <h3>Queires elimianr aljf</h3>
                                                <form action="{{ route('site.destroy', $site) }}" method="POST">
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
                                </div> --}}
    
                            {{--     --}}
                            <div x-data="{ showModal: false }" class="relative pl-5 pt-20">
                                <button @click="showModal = true" class="bg-[#ef4444] hover:bg-Color1 text-white font-bold py-2 px-4 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                                </button>
                                <!-- Delete Modal -->
                                <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto bg-blur bg-[#fcb815] bg-opacity-50">
                                    <div class="flex items-center justify-center min-h-screen">
                                        <div class="bg-Color2 w-96 border-red-700 border-4 rounded-lg shadow-lg">
                                            <div class="p-4">
                                                <div class="text-right">
                                                    <button @click="showModal = false" class="text-sm font-semibold text-white bg-red-700 font-bold py-2 px-4 rounded">X</button>
                                                </div>
                                                <!-- Contenido del modal -->
                                                <h2 class="text-xl text-center font-semibold mb-4 text-red-700">¿Está seguro de eliminar este sitio?</h2>
                                                <form action="{{ route('site.destroy', $site) }}" method="POST">
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
