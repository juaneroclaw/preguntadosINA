<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $deportes = DB::table("quizzes")->insert(["name" => "INA"]);

        $questionUnoDeportes = DB::table("questions")->insert(
            [
                "body" => "¿Cuántos años son Escuela de Religión y Confirmación?",
                "quiz_id" => 1
            ]
        );
        $questionDosDeportes = DB::table("questions")->insert(
            [
                "body" => "¿Qué significa el “Trino Dios”?",
                "quiz_id" => 1
            ]
        );
        $questionTresDeportes = DB::table("questions")->insert(
            [
                "body" => "¿Cuáles son los SACRAMENTOS?",
                "quiz_id" => 1
            ]
        );
        $questionCuatroDeportes = DB::table("questions")->insert(
            [
                "body" => "Los Apóstoles en un principio eran:",
                "quiz_id" => 1
            ]
        );
        $questionCincoDeportes = DB::table("questions")->insert(
            [
                "body" => "El Nombre del Apóstol Mayor es:",
                "quiz_id" => 1
            ]
        );
        $questionCincoDeportes = DB::table("questions")->insert(
            [
                "body" => "¿Con qué actividad comenzamos las clases de Técnica vocal?",
                "quiz_id" => 1
            ]
        );
        $questionCincoDeportes = DB::table("questions")->insert(
            [
                "body" => "La respiración que usamos en Técnica vocal se llama:",
                "quiz_id" => 1
            ]
        );
        $questionCincoDeportes = DB::table("questions")->insert(
            [
                "body" => "La voz femenina se la determina como:",
                "quiz_id" => 1
            ]
        );
        $questionCincoDeportes = DB::table("questions")->insert(
            [
                "body" => "Los compases previos a que se comience a cantar se llaman:",
                "quiz_id" => 1
            ]
        );
        $questionCincoDeportes = DB::table("questions")->insert(
            [
                "body" => "¿Cuáles de estos términos corresponde a voces masculinas?",
                "quiz_id" => 1
            ]
        );
        $questionCincoDeportes = DB::table("questions")->insert(
            [
                "body" => "Separó las aguas:",
                "quiz_id" => 1
            ]
        );
        $questionCincoDeportes = DB::table("questions")->insert(
            [
                "body" => "Adán y Eva eran:",
                "quiz_id" => 1
            ]
        );
        $questionCincoDeportes = DB::table("questions")->insert(
            [
                "body" => "Construyó un arca:",
                "quiz_id" => 1
            ]
        );
        $questionCincoDeportes = DB::table("questions")->insert(
            [
                "body" => "¿Cuántos son los oficios en ayuda a los Difuntos?",
                "quiz_id" => 1
            ]
        );
        $questionCincoDeportes = DB::table("questions")->insert(
            [
                "body" => "¿Cuál es el nombre del Apóstol de nuestro distrito?",
                "quiz_id" => 1
            ]
        );
        //Respuestas a las question de Deportes
        $answerUnoDeportes = DB::table("answers")->insert(
            [
                "answer" => "7",
                "is_correct" => false,
                "question_id" => 1
            ]
        );
        $answerDosDeportes = DB::table("answers")->insert(
            [
                "answer" => "4",
                "is_correct" => true,
                "question_id" => 1
            ]
        );
        $answerTresDeportes = DB::table("answers")->insert(
            [
                "answer" => "10",
                "is_correct" => false,
                "question_id" => 1
            ]
        );
        $answerCuatroDeportes = DB::table("answers")->insert(
            [
                "answer" => "Dios Bendice / Perdona / Ama",
                "is_correct" => false,
                "question_id" => 2
            ]
        );
        $answerCincoDeportes = DB::table("answers")->insert(
            [
                "answer" => "Dios Regaña / No olvida / Se enoja",
                "is_correct" => false,
                "question_id" => 2
            ]
        );
        $questioneisDeportes = DB::table("answers")->insert(
            [
                "answer" => "Dios Padre / Hijo / Espíritu Santo",
                "is_correct" => false,
                "question_id" => 2
            ]
        );
        $questionieteDeportes = DB::table("answers")->insert(
            [
                "answer" => "Bautismo / Santa Cena / Confirmación",
                "is_correct" => false,
                "question_id" => 3
            ]
        );
        $answerOchoDeportes = DB::table("answers")->insert(
            [
                "answer" => "Santa Cena / Padre Nuestro / Triple Amén",
                "is_correct" => false,
                "question_id" => 3
            ]
        );
        $answerNueveDeportes = DB::table("answers")->insert(
            [
                "answer" => "Bautismo / Santa Cena / Sellamiento",
                "is_correct" => true,
                "question_id" => 3
            ]
        );
        $answerOnceDeportes = DB::table("answers")->insert(
            [
                "answer" => "50",
                "is_correct" => false,
                "question_id" => 4
            ]
        );
        $answerDoceDeportes = DB::table("answers")->insert(
            [
                "answer" => "20",
                "is_correct" => false,
                "question_id" => 4
            ]
        );
        $answerTreceDeportes = DB::table("answers")->insert(
            [
                "answer" => "12",
                "is_correct" => true,
                "question_id" => 4
            ]
        );
        $answerCatorceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Wilhem Leber",
                "is_correct" => false,
                "question_id" => 5
            ]
        );
        $answerQuinceDeportes = DB::table("answers")->insert(
            [
                "answer" => "John Bate Cardale",
                "is_correct" => false,
                "question_id" => 5
            ]
        );
        $answerDiezDeportes = DB::table("answers")->insert(
            [
                "answer" => "Jean Luc Schneider",
                "is_correct" => true,
                "question_id" => 5
            ]
        );
        $answerCatorceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Dándonos la mano",
                "is_correct" => false,
                "question_id" => 6
            ]
        );
        $answerQuinceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Haciendo la oración",
                "is_correct" => false,
                "question_id" => 6
            ]
        );
        $answerDiezDeportes = DB::table("answers")->insert(
            [
                "answer" => "Ejercicios de relajación",
                "is_correct" => true,
                "question_id" => 6
            ]
        );
        $answerCatorceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Controlada",
                "is_correct" => false,
                "question_id" => 7
            ]
        );
        $answerQuinceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Oblicua",
                "is_correct" => false,
                "question_id" => 7
            ]
        );
        $answerDiezDeportes = DB::table("answers")->insert(
            [
                "answer" => "Diafragmática",
                "is_correct" => true,
                "question_id" => 7
            ]
        );
        $answerCatorceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Chillona",
                "is_correct" => false,
                "question_id" => 8
            ]
        );
        $answerQuinceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Romántica",
                "is_correct" => false,
                "question_id" => 8
            ]
        );
        $answerDiezDeportes = DB::table("answers")->insert(
            [
                "answer" => "Soprano",
                "is_correct" => true,
                "question_id" => 8
            ]
        );
        $answerCatorceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Preparación",
                "is_correct" => false,
                "question_id" => 9
            ]
        );
        $answerQuinceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Precalentamiento",
                "is_correct" => false,
                "question_id" => 9
            ]
        );
        $answerDiezDeportes = DB::table("answers")->insert(
            [
                "answer" => "Introducción ",
                "is_correct" => true,
                "question_id" => 9
            ]
        );
        $answerCatorceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Flacos y Gordos",
                "is_correct" => false,
                "question_id" => 10
            ]
        );
        $answerQuinceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Medianos y Petizos",
                "is_correct" => false,
                "question_id" => 10
            ]
        );
        $answerDiezDeportes = DB::table("answers")->insert(
            [
                "answer" => "Tenores y Bajos",
                "is_correct" => true,
                "question_id" => 10
            ]
        );
        $answerCatorceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Granja",
                "is_correct" => false,
                "question_id" => 11
            ]
        );
        $answerQuinceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Caín",
                "is_correct" => false,
                "question_id" => 11
            ]
        );
        $answerDiezDeportes = DB::table("answers")->insert(
            [
                "answer" => "Moisés",
                "is_correct" => true,
                "question_id" => 11
            ]
        );
        $answerCatorceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Primos",
                "is_correct" => false,
                "question_id" => 12
            ]
        );
        $answerQuinceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Hermanos",
                "is_correct" => false,
                "question_id" => 12
            ]
        );
        $answerDiezDeportes = DB::table("answers")->insert(
            [
                "answer" => "Los primeros en habitar la tierra",
                "is_correct" => true,
                "question_id" => 12
            ]
        );
        $answerCatorceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Salomón",
                "is_correct" => false,
                "question_id" => 13
            ]
        );
        $answerQuinceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Abel",
                "is_correct" => false,
                "question_id" => 13
            ]
        );
        $answerDiezDeportes = DB::table("answers")->insert(
            [
                "answer" => "Noé",
                "is_correct" => true,
                "question_id" => 13
            ]
        );
        $answerCatorceDeportes = DB::table("answers")->insert(
            [
                "answer" => "8 al año",
                "is_correct" => false,
                "question_id" => 14
            ]
        );
        $answerQuinceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Se hace en cada oficio",
                "is_correct" => false,
                "question_id" => 14
            ]
        );
        $answerDiezDeportes = DB::table("answers")->insert(
            [
                "answer" => "3 al año",
                "is_correct" => true,
                "question_id" => 14
            ]
        );
        $answerCatorceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Claudio Baló",
                "is_correct" => false,
                "question_id" => 15
            ]
        );
        $answerQuinceDeportes = DB::table("answers")->insert(
            [
                "answer" => "Claudio González",
                "is_correct" => false,
                "question_id" => 15
            ]
        );
        $answerDiezDeportes = DB::table("answers")->insert(
            [
                "answer" => "Claudio Videla",
                "is_correct" => true,
                "question_id" => 15
            ]
        );
    }
}
