<!-- Utilizar la plantilla -->
@extends('plantilla')

<!-- Definir titulo -->
@section('titulo','Jugar')
    
<!-- Inserir el contenido -->

@section('contenido')
    <div style="text-align: center"> <h1>Página de Juego</h1></div>  
    
    <div><img src="<?php echo url('img/prueba.png')?>" alt=""></div>
@endsection