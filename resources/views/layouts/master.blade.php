<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

        <!-- Nucleo Icons -->
        <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

        <!-- CSS Files -->
        <!-- <link id="pagestyle" href="{{ Vite::asset('resources/assets/css/material-dashboard.css') }}" rel="stylesheet" />  -->
        <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css') }}" rel="stylesheet" /> 

    </head>
    <body class="g-sidenav-show  bg-gray-100">
        <div id="app-vm">
          
            @yield('content')
            
        </div>
        @stack('script')
        <!--   Core JS Files   -->
        <script src="../assets/js/core/popper.min.js" ></script>
        <script src="../assets/js/core/bootstrap.min.js" ></script>
        <script src="../assets/js/plugins/perfect-scrollbar.min.js" ></script>
        <script src="../assets/js/plugins/smooth-scrollbar.min.js" ></script>
    </body>
</html>


    