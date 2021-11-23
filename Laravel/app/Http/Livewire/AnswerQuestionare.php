<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Questions;
use Illuminate\Support\Facades\DB;

class AnswerQuestionare extends Component
{

    public $questions;

    public function show($id){
        $this->questions = DB::table('questionnaire')
            ->join('questions', 'questionnaire.id', '=', 'questions.questionnaire_id')
            ->select('questions.question', 'questions.questionTyp', 'questions.question_subtyp')
            ->where('questions.questionnaire_id', $id)
            ->get();

        return view('livewire.answer-questionare', [
            'questions' => $this->questions
        ]);
    }
    
    public function render()
    {
        return view('livewire.answer-questionare');
    }
}
