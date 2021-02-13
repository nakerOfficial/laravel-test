<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @yield('main_title')
        </title>
    </head>
    <body>

    <nav style="display: flex; padding: 10px; background: whitesmoke;">
        <a style="padding: 5px;" href="/">Home</a>
        <a style="padding: 5px;" href="/about">About</a>
        <a style="padding: 5px;" href="/review">Review</a>
    </nav>

    @yield('main_content')
        
    </body>
</html>
