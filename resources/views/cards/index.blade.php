@extends('layouts.app')

@section('title')
    Add Flash Card
@endsection

@section('content')

    <script>
		function toggleNewFlashcardForm() {
		    var x = document.getElementById("newFlashcardForm");
		    var t = document.getElementById("toggleText");
		    if (x.style.display === "none") {
		        x.style.display = "block";
		        t.innerHTML = "Hide New Flash Card Form";
		    } else {
		        x.style.display = "none";
		        t.innerHTML = "Show New Flash Card Form";
		    }
		}
	</script>
    
    <p><a id="toggleText" href="#" onclick="toggleNewFlashcardForm()">Show New Flash Card Form</a></p>

	<div id="newFlashcardForm" style="display: none" class="">
		<form class="" method="post" action="/flashcards/">
			@csrf
			<div class="form-group">
				<label for="term">Term</label>
				<input type="text" class="form-control" name="flashcardTerm" id="term">
			</div>
			<div class="form-group">
				<label for="definition">Definition</label>
				<textarea class="form-control" id="definition" name="flashcardDefinition" rows="3"></textarea>
			</div>
			<button class="btn btn-primary" type="submit">Create</button>
		</form>
	</div>

    <display-flashcards :flashcards-data='{{ $flashcards->toJSON() }}'></display-flashcards>

@endsection

