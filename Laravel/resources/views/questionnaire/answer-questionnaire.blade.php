@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
	@livewire('answer-questionare', ['id' => $id])
</div>

@endsection