<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Newspaper - The Laravel Newspaper</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.min.css') }}"/>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
        @include ('includes.navbar')
        <section>
            @yield('content')
        </section>
        <script src="{{ mix('/js/app.js') }}"></script>
        <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/js/custom.js') }}"></script>
    </body>
</html>
