<!-- Utilizar la plantilla -->
@extends('plantilla')

<!-- Definir titulo -->
@section('titulo','Jugar')
    
<!-- Inserir el contenido -->

@section('contenido')
    <div class="text-light" style="text-align: center"> <h1>Página de Juego</h1></div>  
    
    <div class="centrar text-center"><img  src="<?php echo url('img/game.png')?>" width="700" height="350" alt=""></div>
@endsection