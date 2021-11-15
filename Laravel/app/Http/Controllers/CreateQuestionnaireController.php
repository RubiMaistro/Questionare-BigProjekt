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

    public function store() {

        if(Input::has('addItem')) {
            // see if item is already added,
            // add the question

            return Redirect::to('somewhere');

        } elseif(Input::has('removeItem')) {
            // remove the item and quantity

            return Redirect::to('somewhere');

        } elseif(Input::has('submit')) {
            $create_request = new CreateRequest;
            $create_request->requested_by = Input::get('requested_by');
            $create_request->save();

            $create_request->items()->attach(Input::get('items'), array('quantity' => Input::get('item_quantity')));

            // get all items and quantities, save it

            //return Redirect::to('delivery-requests');
            return null;
        } else {
            return 'Something went wrong';
        }
        return Redirect::route('somewhere');
    }
}
