@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <ul>
        <li><a href="/flashcards">Edit Flash Cards</a></li>
        <li><a href="/quiz">Quiz Yourself</a></li>
    </ul>
@endsection
