@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <div x-data="{ showModal: false }" class="bg-Color2">
        <div class="flex p-8">
            <button @click="showModal = true" class="bg-[#fcb815] hover:bg-[#f89f0e] text-white font-bold  w-32 h-12 rounded">
                Crear usuario
            </button>
        </div>

        <!-- Modal -->
        <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto ">
            <div class="flex items-center justify-center min-h-screen">
                <div class="relative bg-Color2 border-[#fcb815] border-2 w-1/2 md:w-1/3 lg:w-1/4 rounded-lg shadow-lg">
                    <div class=" text-right pb-4">
                        <button @click="showModal = false" class="text-sm font-semibold text-white bg-[#ef4444] font-bold py-2 px-4 rounded ">X</button>
                    </div>
                    <div class="p-8">
                        <!-- Contenido del modal -->
                        <h2 class="text-xl font-semibold mb-4 text-[#fcb815] text-center">Crear usuario</h2>
                        <form action="{{ route('user.create') }}" method="get">
                            <label for="" class="text-[#fcb815]">Nombre</label>
                            <div>
                                <input type="text" name="name" placeholder="Ingrese nombre">
                            </div>
                            <label for="" class="text-[#fcb815]">Email</label>
                            <div>
                                <input type="text" name="email" placeholder="Ingrese correo">
                            </div>
                            <label for="" class="text-[#fcb815]">Contraseña</label>
                            <div>
                                <input type="password" name="password" placeholder="Ingrese contraseña">
                            </div>
                            <div class="flex justify-center items-center pt-7">
                                <button type="submit" class="w-23 bg-white font-bold py-2 px-2 rounded hover:bg-[#fcb815]">Registrar </button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="bg-Color2">
    <div class="overflow-x-auto w-full flex justify-center" >
        <table class="m-w-full  divide-y divide-gray-200">
            <thead class="bg-[#1e293b]">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-base font-medium text-white uppercase tracking-wider text-center">ID</th>
                <th scope="col" class="px-6 py-3 text-left text-base font-medium text-white uppercase tracking-wider text-center">Nombre</th>
                <th scope="col" class="px-6 py-3 text-left  text-base font-medium text-white uppercase tracking-wider text-center">E-mail</th>
                <th scope="col" class="px-6 py-3 text-left text-base font-medium text-white uppercase tracking-wider text-center">Opciones</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-black">
            @foreach ($users as $user)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-black">{{ $user->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-black">{{ $user->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-black">{{ $user->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center flex">
                        <div x-data="{ showModal: false }">
                            <div>
                                <button @click="showModal = true" class="bg-[#fcb815] hover:bg-[#f89f0e] text-white font-bold py-2 px-4 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M200-200h57l391-391-57-57-391 391v57Zm-80 80v-170l528-527q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L290-120H120Zm640-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
                                </button>
                            </div>


                            <!-- Modal -->
                            <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto">
                                <div class="flex items-center justify-center min-h-screen">
                                    <div class="relative bg-[#0F172A] border-[#fcb815] border-2 w-1/2 md:w-1/3 lg:w-1/4 rounded-lg shadow-lg">
                                        <div class=" text-right pb-4">
                                            <button @click="showModal = false" class="text-sm font-semibold text-white bg-red-700 font-bold py-2 px-4 rounded ">X</button>
                                        </div>
                                        <div class="p-1">
                                            <!-- Contenido del modal -->
                                            <h2 class="text-xl font-semibold mb-4 text-[#fcb815] ">Editar usuario</h2>
                                            <form action="{{ route('user.update',$user->id) }}" method="post">
                                                @csrf
                                                @method('put')
                                                <label for="" class="text-[#fcb815] font-semibold">Nombre del usuario</label>
                                                <div>
                                                    <input type="text" placeholder="Usuario" name="name" value="{{ $user->name }}">

                                                </div>
                                                <label for="" class="text-[#fcb815] font-semibold">Email</label>
                                                <div>
                                                    <input type="text" placeholder="Email" name="email" value="{{ $user->email }}">
                                                </div>
                                                <div class="flex justify-center items-center pt-7">
                                                    <button type="submit" class="w-23 bg-red-500 font-bold py-2 px-2 rounded hover:bg-[#fcb815]" >Actualizar</button>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-data="{ showModal: false }">
                            <div class="pl-5">
                                <button @click="showModal = true" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg>
                                </button>
                            </div>


                            <!-- Modal -->
                            <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto">
                                <div class="flex items-center justify-center min-h-screen">
                                    <div class="bg-Color2 w-96 border-red-700 border-4  rounded-lg shadow-lg">
                                        <div class="p-3">
                                            <div class=" text-right">
                                                <button @click="showModal = false" class="text-sm font-semibold text-white bg-red-700 font-bold py-2 px-4 rounded">X</button>
                                            </div>
                                            <!-- Contenido del modal -->
                                            <h2 class="text-xl font-semibold mb-4 text-red-500">Esta seguro de eliminar este usuario?</h2>
                                            <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <div>
                                                    <button type="submit" class="bg-red-700 hover:bg-Color1 text-white font-bold py-2 px-4 rounded ">ELIMINAR</button>
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
