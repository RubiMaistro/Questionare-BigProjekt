<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Questionnaire;
use App\Models\Questions;
use App\Models\AnswerList;


class AnswerQuestionare extends Component
{

    public $questionnaire;
    public $questions = [];
    public $answers = [];

    public function mount($id){
        $this->questionnaire = Questionnaire::find($id);
        $this->questions = Questions::all()->where('questionnaire_id', $id);
        $this->answers = AnswerList::all();
    }

    public function clickedAnswer() {
            dd("Working");
    }

    public function saveAnswers() {

    }
    
    public function render() {
        return view('livewire.answer-questionare');
    }
}
