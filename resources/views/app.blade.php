<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('admin_assets/css/font-awesome.min.css')}}">
    
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('admin_assets/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin_assets/css/adminlte.css')}}">

    <!-- Scripts -->
    @routes
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="sidebar-mini sidebar-collapse">
    @inertia
</body>
<script src="{{ asset('admin_assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/jquery-ui.min.js') }}"></script>

<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('admin_assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/adminlte.js') }}"></script>

</html>