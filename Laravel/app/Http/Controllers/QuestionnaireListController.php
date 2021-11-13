<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Questionnaire;
use Illuminate\Http\Request;
use Symfony\Component\Console\Question\Question;

class QuestionnaireListController extends Controller
{
    public function index(){

        $questionnaires = Questionnaire::all();

        return view('questionnaire.list', [
            'questionnaires' => $questionnaires,
        ]);
    }
}
