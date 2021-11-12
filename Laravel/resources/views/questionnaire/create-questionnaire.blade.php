@extends('layouts.app')

@section('content')
<div class="content">
    {{Form::open(array('url' => 'foo/bar'))}}  
    {{Form::text('Requested by', Auth::user()->email, array('disabled'=>'true'))}}
  
    <div>
        {{Form::label('Shows Items from table')}}   
        {{Form::select('items', $items)}}
    </div>

    <div>
      <table>
          <theader>
              <tr>
                  <td>QUESTION</td>
                  <td></td>
              </tr>
          </theader>
          <tbody>
                  <!-- loop through the items -->
                  <td> {{-- Question --}}</td>
                  <td> {{Form::submit('remove item', array('name' => 'removeItem'))}} </td>
          </tbody>
      </table>
    </div>

    <div>
        {{Form::label('Question')}}
        {{Form::text('item_question')}}
    
        {{Form::submit('add item', array('name'=>'addItem'))}}
    </div>
  
    {{Form::submit('submit', array('name' => 'submit'))}}
  {{Form::close()}}
</div>

@endsection