@extends('layouts.app')

@section('content')
<head>
    <title>Answering</title>
</head>

<div class="d-flex justify-content-center">
	@livewire('answer-questionare', ['id' => $id])
</div>

@endsection