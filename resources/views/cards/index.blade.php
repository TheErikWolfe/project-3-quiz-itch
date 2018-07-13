@extends('layouts.card')

@section('title')
    Add Flash Card
@endsection

@section('content')

	@if ($errors->any())
		<div class="alert alert-danger">
			<ul class="mb-0">
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	@if (session('status'))
		<div class="alert alert-success" role="alert">
			{{ session('status') }}
		</div>
	@endif


    <div class="card flash-card-width p-0">
		<div class="card-header">
			<h3 class="m-0 text-center">Add New Flash Card</h3>
		</div>
		<form class="" method="post" action="/flashcards">
			@csrf
			<div class="form-group p-0 card-header">
				<label style="display:none;" for="term"></label>
				<input type="text" class="form-control newFCForm" name="flashcardTerm" id="term" placeholder="Term">
			</div>
			<div class="form-group m-0 p-0 card-body">
				<label style="display:none;" for="definition"></label>
				<textarea class="form-control newFCForm" id="definition" placeholder="Definition" name="flashcardDefinition" rows="3"></textarea>
			</div>
			<div class="card-footer p-0">
				<button class="btn w-100 rounded-0 m-0 btn-primary" type="submit">Create</button>
			</div>
		</form>
		
	</div>

    <display-flashcards :flashcards-data='{{ $flashcards->toJSON() }}'></display-flashcards>

@endsection

