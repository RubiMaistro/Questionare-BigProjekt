<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Questionnaire;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AnswerQuestionnaireController extends Controller
{

    public function show() {
        return view('questionnaire.answer-questionnaire');
    }
}
