<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="assets_main/img/logo.ico" />

    <!-- Font Awesome icons (free version)-->


    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('/assets_main/css/styles.css')}}" rel="stylesheet" />

    <!-- Scripts -->

    @routes

    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body id="page-top" class="sidebar-mini sidebar-collapse">
    @inertia
</body>
<!-- <script src="{{ asset('admin_assets/js/jquery.min.js') }}"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('admin_assets/js/jquery-ui.min.js') }}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('admin_assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin_assets/js/adminlte.js') }}"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


<!-- Contact form JS-->
<script src="{{asset('/assets_main/mail/jqBootstrapValidation.js') }}"></script>
<script src="{{asset('/assets_main/mail/contact_me.js') }}"></script>
<!-- Core theme JS-->
<script src="{{asset('/assets_main/js/scripts.js') }}"></script>


</html>