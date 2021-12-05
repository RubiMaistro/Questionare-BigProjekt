<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Questionnaire;
use App\Models\Questions;
use App\Models\AnswerList;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AnswerQuestionnaireController extends Controller
{
    public function show($id){
        return view('questionnaire.answer-questionnaire',['id' => $id]);
    }

}
