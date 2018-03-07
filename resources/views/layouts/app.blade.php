<html>
    <head>
        <title>Money App - @yield('title')</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>