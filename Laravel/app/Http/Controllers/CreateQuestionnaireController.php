<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Input;
use App\Models\Redirect;
use App\Models\CreateRequest;
use Illuminate\Http\Request;

class CreateQuestionnaireController extends Controller
{
    public function create() {
        return view('questionnaire.create-questionnaire');
    }
}
