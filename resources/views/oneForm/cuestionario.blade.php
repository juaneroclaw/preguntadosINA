@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="quiz-wrapper">
                    <form id="pregunta" name="pregunta" method="POST" action="{{route('respuesta_unico')}}">
                        @csrf
                        <input type="hidden" name="quiz" value="{{$quizz->id}}">
                        @foreach($quizz->questions as $question)
                        <h1>{{ $question->body }}</h1>
                        <div class="form-group">
                            @foreach($question->answer->shuffle() as $answer)
                                <h3>
                                    <div class="form-group">
                                        <div class="radio">
                                            <input type="radio" name="{{$question->id}}" value="{{$answer->is_correct}}">
                                            <label>{{$answer->answer}}</label>

                                        </div>
                                    </div>
                                </h3>
                            @endforeach
                        @endforeach
                        <input class="btn btn-primary" type="submit" value="Enviar respuesta" name="submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
