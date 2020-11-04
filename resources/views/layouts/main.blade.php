<!DOCTYPE html>
    <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset(css/app.css)}}">
        <title>Laravel-migration-seeder</title>
    </head>

    <body>
        <header>
            @include('Partials.header')
        </header>

         <main>
            @yield('main-content')
        </main>

        <footer>
            @include('Partials.footer')
        </footer>
    </body>
</html>