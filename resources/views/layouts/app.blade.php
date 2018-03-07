<html>
    <head>
        <title>Money App - @yield('title')</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Source</a></li>
                </ul>
            </div>
            
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#">Sign Up</a></li>
                    <li class="uk-active"><a href="#">Login</a></li>
                </ul>
            </div>
        </nav>

        <div class="uk-container" uk-container>
            @yield('content')
        </div>

        <!-- Todo: Icon fix -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>