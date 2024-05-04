<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    <form wire:submit.prevent="createUser">
        <div class="mb-5">
            <label for="role" class="block text-sm font-medium text-gray-700">Rol</label>
            <select wire:model="role" id="role" class="block w-full py-2.5 px-4 text-sm border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option selected disabled>Seleccione rol</option>
                <option value="admin">Administrador</option>
                <option value="user">Usuario</option>
            </select>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input wire:model="name" type="text" name="name" id="name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input wire:model="email" type="email" name="email" id="email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
            </div>
        </div>
        <div class="mt-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
            <input wire:model="password" type="password" name="password" id="password" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
        </div>
        <div class="mt-4">
            <label for="repeat_password" class="block text-sm font-medium text-gray-700">Confirmar contraseña</label>
            <input type="password" name="repeat_password" id="repeat_password" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
        </div>
        <div class="mt-4">
            <button type="submit" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-white  bg-lime-900 border border-transparent rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Crear
            </button>
        </div>
    </form>



    @if ($mensaje)
    <div class="fixed inset-0 overflow-y-auto flex items-center justify-center bg-gray-900 bg-opacity-50">
        <!-- Contenido del modal -->
        <div class="modal-container bg-white rounded-lg p-8 max-w-md w-full">
            <!-- Encabezado del modal -->
            <div class="flex justify-between items-center pb-3">
                <h5 class="text-lg font-semibold">Mensaje exitoso</h5>
            </div>
            <!-- Cuerpo del modal -->
            <div class="text-gray-700">
                <p>Usuario creado exitosamente.</p>
            </div>
            <!-- Botón de cerrar -->
            <div class="mt-4 flex justify-end">
                <button wire:click="closeModalMensaje" type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">Cerrar</button>
            </div>
        </div>
    </div>
    @endif
    



</div>

