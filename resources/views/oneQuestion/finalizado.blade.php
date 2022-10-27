@extends('layouts.app')
@section('content')
<div id="inicio" class="container">

   <div class="row pb-5">
        <div class="col-12">
        <h1 class="display-1 text-center txtInicio">Resultado Final...{{Session::get('score')}}</h1>
        </div>
    </div>
    <div class="row p-5">
        <div class="col-12 text-center">
            <a href="{{route('iniciar')}}" id="textBtn" class="fs-3">Volver a jugar</a>
        </div>
    </div>
   </div>
        
   
    
</div>
@endsection
