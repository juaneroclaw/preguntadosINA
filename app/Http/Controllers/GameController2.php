<?php

namespace App\Http\Controllers;

use App\Quiz;
use App\Score;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $categorias = Quiz::all();
        return view('oneQuestion/inicio',[
            'categorias' => $categorias
        ]);
    }

    public function comenzar(Request $request,$id){

        //Como es la primera vez que entro, traigo las preguntas de la categoría que seleccione
        $categoria = Quiz::find($id);
        $preguntas = $categoria->questions;


        //Guardo en mi sesión las preguntas a contestar,
        session([
            'quiz' => $id,
            'questions' => $preguntas,
            'current_question' => 0,
            'total_questions' => count($preguntas),
            'score' => 0
        ]);

        $pregunta = session('questions')[session('current_question')];
        return view('oneQuestion/pregunta',[
            'question'=>$pregunta
        ]);

    }

    public function respuesta(Request $request){
        $respuesta = $request->input('respuesta');

        //Si la respuesta es correcta, aumento el puntaje
        if($respuesta){
            $current_score = $request->session()->get('score') + 1;
            $request->session()->put('score',$current_score);
        }

        //Paso a la siguiente pregunta
        $current_question = $request->session()->get('current_question') + 1;
        $request->session()->put('current_question',$current_question);
        return view('oneQuestion/resultado',['correcto' => $respuesta]);
    }

    public function pregunta(Request $request){
        $current_question = $request->session()->get('current_question');
        $totalQuestions = $request->session()->get('total_questions');

        //Si todavia quedan preguntas, muestro la siguiente
        if ($current_question < $totalQuestions){
            $pregunta = session('questions')[session('current_question')];

            return view('oneQuestion/pregunta',[
                'question'=>$pregunta
            ]);
        }
        //Si no quedan mas preguntas, muestro el resultado
        else{

            $score = Score::create([
                'user_id' =>Auth::user()->id,
                'quiz_id' =>$request->session()->get('quiz'),
                'score' => $request->session()->get('score')
            ]);
//        $maxScore = Auth::user()->scores()->select('score')->where('quiz_id','=',$request->input('quiz'))->max('score');
//        $maxScores = Auth::user()->scores()->groupBy('quiz_id')->max('score');


            return view('oneQuestion/finalizado');
        }
    }

}
