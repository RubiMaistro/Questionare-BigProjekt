<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Questionnaire;
use App\Models\Questions;
use App\Models\AnswerList;
use App\Models\Answers;

class AnswerQuestionare extends Component
{

    public $questionnaire;

    public $questions = array();

    public $answersFromDB = array();
    public $answersToDB = array();

    public $answerInput;

    public $success = False;

    public function mount($id){
        $this->questionnaire = Questionnaire::find($id);
        $this->questions = Questions::all()->where('questionnaire_id', $id);
        $this->answersFromDB = AnswerList::all();
    }

    public function clickedAnswer($question_id, $userAnswer) {
        $this->answersToDB[$question_id] = $userAnswer;
    }

    public function saveAnswers() {
        dd($this->answersToDB);
        foreach($this->answersToDB as $element){
            $answer = new Answers;
            $answer->question_id = array_search($element, $this->answersToDB);
            $answer->answer = $element;
            $answer->save();
        }
        $this->success = True;
    }
    
    public function render() {
        return view('livewire.answer-questionare');
    }
}
