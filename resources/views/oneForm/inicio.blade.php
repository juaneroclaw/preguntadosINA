@extends('layouts.app')
@section('content')
    <h1>Comenzar cuestionario</h1>
    <ul>
@forelse($categorias as $categoria)
   <li> <a href="{{route('comenzar_unico',['id' => $categoria->id])}}">{{$categoria->name}}</a></li>
@empty
    <li>No hay categorias que mostrar</li>
@endforelse
    </ul>
@endsection
