<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .inicialCont{
            width: 100px;
            height: 200px;
        }

        .center{
            margin-top: 50px;
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
            position: absolute;
            left: 0;
            right: 0;
            left: 0;
            padding: 1rem;
            bottom: 0;
            width: 100%;
            text-align: center;
            background-color: #a349e0;
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
    <title>@yield('titulo')</title>
    <!--Scripts-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body class="fondColor">
    <!-- Donde irá el header -->
    @include('parciales/header')

    <!-- Contenido personalizado de cada web -->
    @yield('contenido')

    <!-- Posible pie de pagina -->
    @include('parciales/footer')
    
</body>
</html>