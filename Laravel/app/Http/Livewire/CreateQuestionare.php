<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Questionnaire;
use App\Models\Questions;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Question\Question;

class CreateQuestionare extends Component
{
    public $questionareName;

    public $questions = [];
    
    public $newQuestion;
    public $typ;

    public $editID;
    public $editQuestion;
    public $editTyp;

    public $success = False;

    public function addRow(){
        //Undorító spagetti, kijavítom majd
        if($this->typ == null){
            $this->typ = 'knowledge';
        }

        $id = count($this->questions);
        $questionArray = array($id, $this->newQuestion, $this->typ);
        array_push($this->questions, $questionArray);
        $this->question = "";
        $this->typ = "knowledge";
        //dd($this->questions);
    }

    public function saveQuestionare(){
        $questionare = new Questionnaire;
        $questionare->user_id = Auth::user()->id;
        $questionare->name = $this->questionareName;
        $questionare->save();

        $id = Questionnaire::all()->reverse()->first()->id;
        
        foreach($this->questions as $row){
            $question = new Questions;
            $question->questionnaire_id = $id;
            $question->question = $row[1];
            $question->questionTyp = $row[2];
            $question->save();
        }

        $this->success = True;

    }

    public function updateClick($id){
        //dd($this->questions[$id][2]);
        $this->editID = $id;
        $this->editQuestion = $this->questions[$id][1];
        $this->editTyp = $this->questions[$id][2];
    }

    public function updateRow(){
        $this->questions[$this->editID][2] = $this->editTyp;
        $this->questions[$this->editID][1] = $this->editQuestion;

        unset($this->editID);
    }

    public function toHome(){ return redirect('/');}

    public function setNew(){
        $this->success =False;
        $this->questions = [];
        $this->newQuestion = "";
        $this->questionareName = "";
    }

    public function render()
    {
        //dd(count($this->questions));
        return view('livewire.create-questionare');
    }
}
