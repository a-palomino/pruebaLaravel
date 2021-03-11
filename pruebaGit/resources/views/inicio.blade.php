<!-- Utilizar la plantilla -->
@extends('plantilla')

<!-- Definir titulo -->
@section('titulo','inicio')
    
<!-- Inserir el contenido -->

@section('contenido')

    <!-- Titulo -->
    <div class="text-light" style="text-align: center"> <h1>G-LOOP</h1></div> 
    
    <!-- Descripción -->
    <div class="text-light" style="text-align: center; margin-top:20px"><h4>G-LOOP és un juego 2D de plataformas y acción, desarrollado por GameStudios</h4></div>

    <div class="text-light" style="text-align: center; margin-top:20px"><h5>Pruebalo ya y dejate sorprender para diversión obtener</h5></div>
    <!-- Contenido con el link para jugar -->

    <div class="center">
        <button class="btn btn-outline-danger btn-lg"><a class="text-light" style="text-decoration: none" href="jugar" class="texto">Jugar</a></button>
    </div>

    <div class="center score">
        <button class="btn btn-outline-warning"><a class="text-light" style="text-decoration: none" href="estadisticas" class="texto">Score</a></button>
    </div>

    
        
        
    
@endsection

