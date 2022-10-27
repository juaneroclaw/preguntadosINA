@extends('layouts.app')
@section('content')
<div id="inicio" class="container">

   <div class="row pb-5">
        <div class="col-12">
        <h1 class="display-1 text-center txtInicio">Bienvenidos a Preguntados INA</h1>
        </div>
    </div>
    <div class="row p-5">
        <div class="col-12 text-center">
            @forelse($categorias as $categoria)
                <a href="{{route('comenzar',['id' => $categoria->id])}}" id="textBtn" class="fs-3">Empezar</a>
            @empty
                <li>No hay categorias que mostrar</li>
            @endforelse
        </div>
    </div>
   </div>
        
   
    
</div>
@endsection

