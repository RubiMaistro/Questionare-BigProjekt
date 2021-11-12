@extends('layouts.app')

@section('content')
<div class="content">
  <div class="row justify-content-center">
    <div class="card" style="width: 18rem;">
        @foreach($questions as $question)
        <div class="card-body" style="background-color: yellowgreen; margin: 1rem 0.5rem 1rem 0.5rem;">
            <h5 class="card-title">
                {{ $question->question }}
            </h5>
       </div>
       @endforeach
    </div>
  </div>
</div>

@endsection