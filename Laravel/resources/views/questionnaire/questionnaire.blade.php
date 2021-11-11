@extends('layouts.app')

@section('content')
<div class="content">
  <div class="row justify-content-center">
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">

      @foreach($questionnaires as $questionnaire)
      <div class="card-body" style="background-color: yellowgreen; margin: 1rem 0.5rem 1rem 0.5rem;">
        <h5 class="card-title">
            {{ $questionnaire->name }}
        </h5>
        <p class="card-text">
            {{ $questionnaire->description }}
        </p>
        <a href="#" class="btn btn-primary" style="display: flex; justify-content: center;">Kitöltés</a>
      </div>
      @endforeach

    </div>
  </div>
</div>

@endsection