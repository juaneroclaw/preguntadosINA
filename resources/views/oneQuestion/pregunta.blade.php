@extends('layouts.app')
@section('content')
    <div id="jugar" class="container text-center">
        <template>
         timerCount 
    </template>
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
                            <h3>
                                <div class="form-group">
                                    <div class="radio">
                                    <input type="radio" class="btn-check" name="options-outlined" id="{{$answer->id}}" autocomplete="off" value="{{$answer->id}}">
                                    <label class="btn btn-outline-warning btnRespuesta fs-2 text-center px-5" for="{{$answer->id}}">{{$answer->answer}}</label>
                                    </div>
                                </div>
                            </h3>
                        @endforeach
                        <input id="textBtn" type="submit" value="Enviar respuesta" name="submit"/>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection



<script>

    export default {

        data() {
            return {
                timerCount: 30
            }
        },

        watch: {

            timerCount: {
                handler(value) {

                    if (value > 0) {
                        setTimeout(() => {
                            this.timerCount--;
                        }, 1000);
                    }

                },
                immediate: true // This ensures the watcher is triggered upon creation
            }

        }
    }

</script>