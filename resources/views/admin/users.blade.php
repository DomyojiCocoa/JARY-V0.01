@vite(['resources/css/app.css', 'resources/js/app.js'])
<x-app-layout>
    <div x-data="{ showModal: false }" class="bg-Color2">
        <div class="flex p-8">
            <button @click="showModal = true" class="bg-green-500 hover:bg-red-400 text-white font-bold  w-32 h-12 rounded">
                Crear usuario
            </button>
        </div>

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

    <div class="bg-Color2">
    <div class="overflow-x-auto w-full flex justify-center" >
        <table class="m-w-full  divide-y divide-gray-200">
            <thead class="bg-Color3">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-green-500 uppercase tracking-wider text-center">ID</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-green-500 uppercase tracking-wider text-center">Nombre</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-green-500 uppercase tracking-wider text-center">E-mail</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-green-500 uppercase tracking-wider text-center">Opciones</th>
            </tr>
            </thead>
            <tbody class="bg-Color3 divide-y divide-green-500">
            @foreach ($users as $user)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-green-500">{{ $user->id }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-green-500">{{ $user->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center text-green-500">{{ $user->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center flex">
                        <div x-data="{ showModal: false }">
                            <div>
                                <button @click="showModal = true" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    EDITAR
                                </button>
                            </div>


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
                            <div class="pl-5">
                                <button @click="showModal = true" class="bg-Color2 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
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

</x-app-layout>
