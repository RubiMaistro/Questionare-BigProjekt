<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CreateQuestionnaireController extends Controller
{
    public function create() {
        return view('questionnaire.create-questionnaire');
    }
}
