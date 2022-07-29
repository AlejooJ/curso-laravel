{{-- Heredaos la plantilla padre --}}
@extends('layouts.plantilla')

{{-- Se cambia el titulo, como es corto se puede colocar en la misma linea  --}}
@section('titulo', 'Principal')
    

{{-- Este será el contenido cammbiante de la página, como va a contener grandes cantidades de codigo se abre la seeción y se cierra al final --}}
@section('contenido')

<h1>Esta es la página principal con blade</h1>
    
@endsection

{{-- Nota, todos los archivos que se van a heredar deben tener la extensión .blade --}}