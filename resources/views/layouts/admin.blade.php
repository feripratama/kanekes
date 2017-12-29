<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="icon" href="{{ asset('favicon.ico') }}">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}">
    </head>
    <body class="page-admin">
        <div class="admin-wrapper active">
            @include('admin.sidebar')
            @include('admin.navbar')

            <div class="admin-content-wrap">
                @include('admin.main')

                @include('admin.footer')
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
