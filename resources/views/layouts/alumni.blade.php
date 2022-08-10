<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('light-bootstrap/img/apple-icon.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('img/dorsu.png') }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
        <!-- CSS Files -->
        <link href="{{ asset('light-bootstrap/css/bootstrap.css') }}" rel="stylesheet" />
        <script src="{{asset('light-bootstrap/js/core/jquery.3.2.1.min.js')}}"></script>
        <script src="{{asset('light-bootstrap/js/core/adminlte.min.js')}}"></script>
        <link rel="stylesheet" href="{{ asset('css/allumni.css') }}">
    </head>

    <body class="hold-transition layout-fixed sidebar-mini">
        <div class="wrapper">
            @if($loged)
                @include('layouts.navbars.asidebar')
                <script>
                    $(function(){
                        $(".userid").val($("#userid").text());
                    })
                </script>
            @endif
            @yield('content')
        </div>
    </body>
</html>