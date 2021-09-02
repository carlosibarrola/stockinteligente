<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stock Inteligente</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-image: url('../images/login-new.jpeg');
            }
        </style>
    </head>
    <body class="bg-cover h-screen">
        <h1 class="font-bold flex justify-center pt-8 text-4xl">Bienvenido!</h1>
        <div class="container mx-auto h-full flex justify-center items-center">
            <div class="w-full max-w-lg">
              <div class="leading-loose">
                <form class="max-w-xl m-4 p-10 bg-white rounded-md shadow-2xl mt-4 mb-20">
                  <p class="text-gray-800 font-bold text-center text-lg mb-20">Stock Inteligente</p>
                  <div class="flex mt-8 items-center justify-center gap-1">
                    <a class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" href="login">Ingresar</a>
                    <a class="px-4 py-1 text-white font-light tracking-wider bg-gray-700 rounded" href="register">Registrate</a>
                  </div>
                </form>
                
              </div>
            </div>
        </div>
        <x-footer/>
    </body>
</html>
