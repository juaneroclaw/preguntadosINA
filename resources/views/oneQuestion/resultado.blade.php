@extends('layouts.app')
@section('content')
<div id="jugar" class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <div id="quiz-wrapper">
                    <div class="border border-3 border-dark bg-white p-5 mb-5 rounded-3">
                        <h1>{{ $question->body }}</h1>
                    </div>
                    <form id="pregunta" name="pregunta" method="POST" action="{{route('respuesta')}}">
                        @csrf
                        <div class="form-group">
                        @foreach($question->answer->shuffle() as $answer)
                            
                            @if ($seleccion == $answer->id)
                            
                            <h3>
                                <div class="form-group">
                                    <div class="radio">
                                    <input type="radio" class="btn-check" name="options-outlined" id="{{$answer->id}}" autocomplete="off" value="{{$answer->id}}">
                                    <label class="btn btn-outline-warning {{$correcto? 'btnCorrecto':'btnincorrecto'}} fs-2 text-center px-5" for="{{$answer->id}}">{{$answer->answer}}</label>
                                    </div>
                                </div>
                            </h3>
                            @else
                            <h3>
                                <div class="form-group">
                                    <div class="radio">
                                    <input type="radio" class="btn-check" name="options-outlined" id="{{$answer->id}}" autocomplete="off" value="{{$answer->id}}">
                                    <label class="btn btn-outline-warning {{$answer->is_correct? 'btnCorrecto':'btnRespuesta'}} fs-2 text-center px-5" for="{{$answer->id}}">{{$answer->answer}}</label>
                                    </div>
                                </div>
                            </h3>
                            @endif
                        @endforeach
                        <a href="{{route('pregunta')}}" id="textBtn" class="btn btn-md">Siguiente</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
