<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function index(){

        $questionnaires = Questionnaire::all();

        return view('questionnaire.questionnaire', [
            'questionnaires' => $questionnaires,
        ]);
    }

    public function show() {
        return null;
    }
}
