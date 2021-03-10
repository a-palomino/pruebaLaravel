<!-- Utilizar la plantilla -->
@extends('plantilla')

<!-- Definir titulo -->
@section('titulo','inicio')
    
<!-- Inserir el contenido -->

@section('contenido')

    <!-- Titulo -->
    <div style="text-align: center"> <h1>Página de Inicio (Prueba)</h1></div> 
    
    <!-- Descripción -->
    <div style="text-align: center; margin-top:20px"><h4>TITULO és un juego plataformas y acción en scroll lateral</h4></div>

    <!-- Contenido con el link para jugar -->

    <div class="center">
        <button class="btn btn-outline-danger btn-lg"><a href="jugar" class="texto">Jugar</a></button>
    </div>

    <div class="center score">
        <button class="btn btn-outline-warning"><a href="estadisticas" class="texto">Score</a></button>
    </div>
        
        
    
@endsection

