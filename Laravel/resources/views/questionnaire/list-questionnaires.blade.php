@extends('layouts.app')

@section('content')
<head>
  <title>List</title>
</head>

<div class="content">
  <div class="row row-cols-2 row-cols-lg-5 justify-content-center ">
    @foreach($questionnaires as $questionnaire)
      <div class="card p-4" style="background-color: skyblue; width: 20%; margin: 1rem 0.5rem 1rem 0.5rem;">
        <h5 class="card-title">
            {{ $questionnaire->name }}
        </h5>
        <p class="card-text">
            {{ $questionnaire->description }}
        </p>
        <a href="/questionnaire/{{ $questionnaire->id }}" class="btn btn-primary " style="display: flex; justify-content: center;">Kitöltés</a>
      </div>
      @endforeach
    
  </div>
  
</div>

@endsection