<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Víctor Sabido">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('app/images/favicon.png')}}">
    <title>Admin - Edictum</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('app/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    @stack('add_css')
    <!-- Custom CSS -->
    <link href="{{ asset('app/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('app/css/colors/blue-dark.css')}}" id="theme" rel="stylesheet">
</head>

<body class="fix-header card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50"><circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /></svg>
    </div>
    <div id="main-wrapper">
        
        @include('partials.header')

        @include('partials.leftSidebar')
        
        <div class="page-wrapper">
            <div class="container-fluid">
                @yield('content')

                @include('partials.rightSidebar')
            </div>
            <footer class="footer">
                © {{date('Y')}} Edictum por Víctor Sabido
            </footer>
        </div>
    </div>

    <script src="{{ asset('app/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('app/plugins/bootstrap/js/tether.min.js')}}"></script>
    <script src="{{ asset('app/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('app/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('app/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('app/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{ asset('app/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('app/js/custom.min.js')}}"></script>

        @stack('add_js')
        @stack('add_scripts')
</body>
</html>