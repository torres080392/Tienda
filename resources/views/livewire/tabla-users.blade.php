<!-- Modal -->
<div class="fixed z-50 inset-0 overflow-y-auto flex justify-center items-center bg-gray-900 bg-opacity-50">
    <!-- Contenido del modal -->
    <div class="modal-container bg-white w-11/12 md:max-w-2xl mx-auto rounded-lg shadow-lg overflow-y-auto">
        <!-- Encabezado del modal -->
        <div class="bg-gray-800 px-4 py-3 rounded-t-lg">
            <h3 class="text-lg font-semibold text-white">Lista de usuarios</h3>
        </div>
        <!-- Contenido de la tabla -->
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-3">Rol</th>
                        <th class="px-6 py-3">Nombre</th>
                        <th class="px-6 py-3">Correo</th>
                        <th class="px-6 py-3">Eliminar</th>
                        <th class="px-6 py-3">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $user->role }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->name}}</td>
                        <td class="px-6 py-4">
                            {{ $user->email }}</td>
                        <td class="px-6 py-4">
                            <button wire:click="delete({{ $user->id }})"
                                class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $users->links() }}
        <!-- Botón de cerrar -->
        <div class="bg-gray-200 px-4 py-3 rounded-b-lg flex justify-end">
            <a href="{{ route('admin.dashboard') }}" class="text-gray-600 hover:text-gray-800 font-semibold">Cerrar</a>
        </div>
    </div>


    
    @if ($mensajeDelete)
    <div class="fixed inset-0 overflow-y-auto flex items-center justify-center bg-gray-900 bg-opacity-50">
        <!-- Contenido del modal -->
        <div class="modal-container bg-white rounded-lg p-8 max-w-md w-full">
            <!-- Encabezado del modal -->
            <div class="flex justify-between items-center pb-3">
                <h5 class="text-lg font-semibold">Mensaje exitoso</h5>
            </div>
            <!-- Cuerpo del modal -->
            <div class="text-gray-700">
                <p>Usuario eliminado exitosamente.</p>
            </div>
            <!-- Botón de cerrar -->
            <div class="mt-4 flex justify-end">
                <button wire:click="closeModalMensaje" type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">Cerrar</button>
            </div>
        </div>
    </div>
    @endif


</div>
