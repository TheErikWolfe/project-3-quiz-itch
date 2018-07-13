@extends('layouts.card')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header text-center p-0">
                    <a href="/flashcards">Edit Flash Cards</a>
                </div>
                <div class="card-body">
                    <p mb-0>Edit, Add, and Delete Flash Cards Here!</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header text-center p-0">
                    <a href="/quiz">Quiz Yourself</a>
                </div>
                <div class="card-body">
                    <p mb-0>Quiz Yourself Using Your Flash Cards!</p>
                </div>
            </div>
        </div>
        
    </div>
@endsection
