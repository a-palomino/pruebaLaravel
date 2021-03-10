<!-- Utilizar la plantilla -->
@extends('plantilla')

<!-- Definir titulo -->
@section('titulo','Estadisticas')
    
<!-- Inserir el contenido -->

@section('contenido')

    <!-- Puntuacion jugadores -->
    <div class="text-light" style="text-align: center"> <h1>Ranking</h1></div>
    
    <div class="container" style="margin-top: 50px">
        <div class="row justify-content-center  align-items-center">
            

            @isset($estadisticas)

            
                <!-- Variable para los jugadores-->
                <?php $cont = 0;?>
            
            <!-- Printamos los datos de las estadisticas -->
                @foreach ($estadisticas as $est)
                    <div class="col-sm-8 align-self-center text-center text-danger text-light" style="text-align: center"><h3 class="{{ colores(++$cont) }}">Jugador {{$cont}}: {{ $est['est']}}</h3></div>
                @endforeach

            @endisset
                
        </div>
    </div>
@endsection