@extends('layouts.card')

@section('title')
    Add Flash Card
@endsection

@section('content')

    <div class="card p-0">
		<div class="card-header">
			<h3 class="m-0 text-center">Add New Flash Card</h3>
		</div>
		<form class="" method="post" action="/flashcards/">
			@csrf
			<div class="form-group p-0 card-header">
				<input type="text" class="form-control" name="flashcardTerm" id="term" placeholder="Term">
			</div>
			<div class="form-group m-0 p-0 card-body">
				<textarea class="form-control" id="definition" placeholder="Definition" name="flashcardDefinition" rows="3"></textarea>
			</div>
		</form>
		<button class="btn rounded-0 btn-primary" type="submit">Create</button>
	</div>

    <display-flashcards :flashcards-data='{{ $flashcards->toJSON() }}'></display-flashcards>

@endsection

