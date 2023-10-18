@extends('layouts.layout')

@section('title', 'Home Page')

@section('content')
<style>
    .active-status {
    background-color: green;
    color: white;
}

.inactive-status {
    background-color: red;
    color: white;
}
</style>

 <h2>Quizzes:</h2>
 <br>
 @foreach ($quizzes as $quiz)
    <div class="quiz-card">
        <h4>{{ $quiz['name'] }}</h4>
        <img src="{{ $quiz['photo'] }}" alt="{{ $quiz['name'] }}" class="quiz-photo">

        <div class="status {{ $quiz['status'] === 'active' ? 'active-status' : 'inactive-status' }}">
            {{ $quiz['status'] }}
        </div>
    </div>
@endforeach

@endsection