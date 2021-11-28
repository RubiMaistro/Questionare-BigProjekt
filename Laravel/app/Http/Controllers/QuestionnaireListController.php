<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Questionnaire;

class QuestionnaireListController extends Controller
{
    public function index(){

        $questionnaires = Questionnaire::all();

        return view('questionnaire.list-questionnaires', [
            'questionnaires' => $questionnaires,
        ]);
    }

    public function review(){

        $questionnaires = Questionnaire::all();

        return view('questionare.questionare', [
            'questionnaires' => $questionnaires,
        ]);
    }
}
