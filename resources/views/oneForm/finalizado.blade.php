@extends('layouts.app')
@section('content')
<h1>Tu puntaje fue {{$score}}</h1>
<a href="{{route('iniciar_unico')}}">Volver al inicio</a>
@endsection
