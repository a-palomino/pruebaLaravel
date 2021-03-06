<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
        .inicialCont{
            width: 100px;
            height: 200px;
        }

        .center{
            margin-top: 100px;
            text-align: center;
        }

        .score{
            margin-top: 25px;
            text-align: center;
        }

        .texto{
            text-decoration: none;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
        }

        .navColor{
            background-color: #a349a4;
        }

        .fondColor{
            background-color: #6000bf;
        }

        .oro{
            color: #fff200;
        }

        .plata{
            color: #c0c0c0;
        }

        .bronce{
            color: #cd7f32;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body class="fondColor">
    @include('./parciales/header')
    <div id="app">
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Posible pie de pagina -->
    @include('./parciales/footer')
</body>
</html>
