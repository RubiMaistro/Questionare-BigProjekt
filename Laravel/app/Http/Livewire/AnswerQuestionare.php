<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Questions;
use Illuminate\Support\Facades\DB;

class AnswerQuestionare extends Component
{

    public $questions;
    public $answers;

    public function show($id){
        $this->questions = DB::table('questionnaire')
            ->join('questions', 'questionnaire.id', '=', 'questions.questionnaire_id')
            ->select(
                'questions.id',
                'questions.question', 
                'questions.questionTyp', 
                'questions.question_subtyp'
                    )
            ->where('questions.questionnaire_id', $id)
            ->get();

        $this->answers = DB::table('questions')
        ->join('table_answer_list', 'questions.id', '=', 'table_answer_list.questions_id')
        ->select(
            'table_answer_list.id',
            'table_answer_list.questions_id',
            'table_answer_list.answer'
                )
        ->get();

        return view('livewire.answer-questionare', [
            'questions' => $this->questions,
            'answers' => $this->answers
        ]);
    }

    public function clickedAnswer() {

    }

    public function setWritedAnswers() {

    }

    public function saveAnswers() {

    }
    
    public function render() {
        return view('livewire.answer-questionare');
    }
}
