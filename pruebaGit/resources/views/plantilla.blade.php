<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
 
</head>
<body>
    <!-- Donde irá el header -->
    @include('parciales/header')

    <!-- Contenido personalizado de cada web -->
    @yield('contenido')

    <!-- Posible pie de pagina 
        include('parciales/footer
    -->
    
</body>
</html>