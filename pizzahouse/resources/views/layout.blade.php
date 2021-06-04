<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color: rgba(26,32,44);
                color: red;
            }

            footer {
              background: black;
              padding: 20px;
              text-align: center;
            }
        </style>
    </head>
    <body>
      @yield('content')

      <footer>
        Copyright 2021 Pizza House
      </footer>
    </body>
</html>
