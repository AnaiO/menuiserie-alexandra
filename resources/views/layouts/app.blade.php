<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="/css/app.css" rel="stylesheet">
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