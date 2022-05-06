<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>E-Commerce Admin</title>



    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="admin/css/nucleo-icons.css" rel="stylesheet" />
    <link href="admin/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">


        
</head>
<body>
    <div class="content">

        @yield('content')
    
    </div>



    <!--   Core JS Files   -->
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" ></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('status'))
        <script>
            // swal("{{ session('status') }}","{{ session('stat') }}");
            swal({
                title: "Good job!",
                text: "{{ session('message') }}",
                icon: "{{ session('status') }}",
            });
        </script>
    @endif
    @yield('scripts')
</body>
</html>
