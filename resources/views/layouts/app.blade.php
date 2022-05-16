<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="/css/app.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
            <title>Menuiserie Alexandra - @yield('title')</title>
            <!-- Fonts -->

        </head>
        <body>
            <div class="container mx-auto">
                @yield('content')
            </div>
            <footer>
                <a href='https://fr.freepik.com/photos/fond'>Fond photo créé par pvproductions - fr.freepik.com</a>
            </footer>
        </body>
    </html>