<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Eray's Blog</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>
    <div class="topnav">
        <a href="/">Home</a>
        <a href="/blogs">Blog</a>
        <a href="/contact">Contact</a>
        <a href="/about">About</a>
    </div>

      @yield('content')

      <footer>
        <p>Written By Laravel/PHP</p>
        <p>Copyright 2023</p>
      </footer>
    </body>
</html>