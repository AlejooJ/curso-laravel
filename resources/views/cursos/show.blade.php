
@extends('layouts.plantilla')

@section('titulo', 'Show curso' . $curso)
    
@section('contenido')

 <h1>Bienvenido al curso de {{$curso}}</h1>
    
@endsection