<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Score;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GameUniqueController extends Controller
{
    public function index(Request $request){
        $categorias = Quiz::all();
        return view('oneForm/inicio',[
            'categorias' => $categorias
        ]);
    }

    public function comenzar(Request $request,$id){
        //Como es la primera vez que entro, traigo las preguntas de la categoría que seleccione
        $quiz = Quiz::find($id);
        return view('oneForm/cuestionario',[
            'quizz'=>$quiz
        ]);

    }

    public function resultado(Request $request){
        $inputs = collect($request->all());
        $quizId = $inputs->pull('quiz');
        $valor = 0;
        foreach ($inputs as $key=>$input){
            if ($key != '_token' && $key != 'submit')
                if($input) {
                    $valor++;
                }
        }
        $user = Auth::user();
        $score = Score::create([
            'user_id' =>$user->id,
            'quiz_id' =>$quizId,
            'score' => $valor
            ]);
//        $maxScore = Auth::user()->scores()->select('score')->where('quiz_id','=',$request->input('quiz'))->max();
//       $maxScores = Auth::user()->scores()->groupBy('quiz_id')->max('score');

        $score=[];
        return view('oneForm/finalizado',[
            'score' => $score->score
        ]);
    }
}
