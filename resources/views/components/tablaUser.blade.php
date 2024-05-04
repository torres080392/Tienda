<head>

    @vite('resources/css/app.css')
    @vite('resources/css/tableUser.css')
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
    <!--Replace with your tailwind.css once created-->
    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet"
        @livewireStyles
     </head>

     <header>
        <livewire:menu /> 
     </header>

<body>
</br>
</br>
</br>
</br>
    <livewire:tabla-users />


    @livewireScripts
</body>

</html>

