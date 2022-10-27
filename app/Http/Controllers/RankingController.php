<?php

namespace App\Http\Controllers;

use App\Score;
use Illuminate\Http\Request;
use App\User;
class RankingController extends Controller
{
    public function index(){
        $topUsers = User::select('name','max_score')->orderBy('max_score')->limit(10)->get();
        return view('ranking/max_scores',[
            'users' => $topUsers
        ]);
    }

    public function maxCategorias(){
        $scores = Score::orderBy('score')->groupBy
    }
}
