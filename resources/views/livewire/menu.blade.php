<div>
    <!-- component -->
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/dist/tailwind.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
            integrity="sha384-H7ffHW2dIa4e1IfxkYjHpkp6O9ysBiGZG+TnrWlXq4iSXM2K8NtRI3Zbpx+73sv7" crossorigin="anonymous">

    </head>

    <body class="bg-white-600">
      
        <span class="absolute text-white text-4xl top-5 left-4 cursor-pointer" onclick="openSidebar()">
            <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
        </span>
      
        <div class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-black" >
            <img src="{{ asset('images/LOGOMIO.png') }}" alt="Mi logo" width="230" height="200">
            <div class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white">
                <i class="bi bi-search text-sm"></i>
                <input type="text" placeholder="Search"
                    class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" />
            </div>
            <!-- component home-->
            <div
                class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
                <i class="bi bi-house-door-fill"></i>
                <a href="{{Route('admin.dashboard')}}" class="text-[15px] ml-4 text-gray-200 font-bold">Home</a>
            </div>

            <!-- component notificacion-->
            <div class="my-4 bg-gray-600 h-[1px]"></div>
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
                onclick="dropdown3()">
                <i class="bi bi-send"></i>
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Notificaciones</span>
                    <span class="text-sm rotate-180" id="arrow">
                        <i class="bi bi-chevron-down"></i>
                    </span>
                </div>
            </div>
            <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold hidden" id="submenu3">
                <a href="#"
                    class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1 block">Notificar usuario</a>

            </div>

        

<!-- component usuarios-->
            <div class="my-4 bg-gray-600 h-[1px]"></div>
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
                onclick="dropdown()">
                <i class="bi bi-people"></i>
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">Usuarios</span>
                    <span class="text-sm rotate-180" id="arrow">
                        <i class="bi bi-chevron-down"></i>
                    </span>
                </div>
            </div>
            <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold hidden" id="submenu">
                <a href="{{ route('tabla-user') }}"
                    class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1 block">Listado</a>

                <a href="{{ route('nuevo-user') }}"
                    class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1 block">Crear usuarios</a>

                <a href="#" class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1 block">Buscar</a>
            </div>

 <!-- component sesion-->
            <div class="my-4 bg-gray-600 h-[1px]"></div>
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
                onclick="dropdown2()">
                <i class="bi bi-box-arrow-right"></i>
                <div class="flex justify-between w-full items-center">
                    <span class="text-[15px] ml-4 text-gray-200 font-bold">{{Auth::user()->role  }} </span>
                    <div class="font-medium text-base text-white-800">{{ Auth::user()->name }}</div>
                    <span class="text-sm rotate-180" id="arrow">
                        <i class="bi bi-chevron-down"></i>
                    </span>
                </div>
            </div>
            <div class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold hidden" id="submenu2">
                <a href="salir"
                    class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1 block">Cerrar Sesion</a>
            </div>
        
 
            
        </div>

        <script type="text/javascript">
               function dropdown() {
                document.querySelector("#submenu").classList.toggle("hidden");
                document.querySelector("#arrow").classList.toggle("rotate-0");
            }

            // Ocultar el submenu al cargar la página
            document.addEventListener("DOMContentLoaded", function () {
                document.querySelector("#submenu").classList.add("hidden");
            });

            function openSidebar() {
                document.querySelector(".sidebar").classList.toggle("hidden");
            }


          

            function dropdown2() {
                document.querySelector("#submenu2").classList.toggle("hidden");
                document.querySelector("#arrow").classList.toggle("rotate-0");
            }
           
             // Ocultar el submenu al cargar la página
             document.addEventListener("DOMContentLoaded", function () {
                document.querySelector("#submenu2").classList.add("hidden");
            });


            function openSidebar() {
                document.querySelector(".sidebar").classList.toggle("hidden");
            }



             

            function dropdown3() {
                document.querySelector("#submenu3").classList.toggle("hidden");
                document.querySelector("#arrow").classList.toggle("rotate-0");
            }
           
             // Ocultar el submenu al cargar la página
             document.addEventListener("DOMContentLoaded", function () {
                document.querySelector("#submenu3").classList.add("hidden");
            });


            function openSidebar() {
                document.querySelector(".sidebar").classList.toggle("hidden");
            }
        </script>

    </body>

    </html>
</div>
