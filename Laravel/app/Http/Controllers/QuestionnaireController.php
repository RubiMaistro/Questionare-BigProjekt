<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Questionnaire;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function show($id) {

        $questions = DB::table('questionnaire')
                ->join('questions', 'questionnaire.id', '=', 'questions.questionnaire_id')
                ->select('questions.question')
                ->where('questions.questionnaire_id', $id)
                ->get();

        return view('questionnaire.questionnaire', [
            'questions' => $questions,
        ]);;
    }
}
