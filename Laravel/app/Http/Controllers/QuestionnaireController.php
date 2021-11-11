<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function show($id) {

        $questionnaire = Questionnaire::find($id);

        return view('questionnaire.questionnaire', [
            'questionnaire' => $questionnaire,
        ]);;
    }
}
