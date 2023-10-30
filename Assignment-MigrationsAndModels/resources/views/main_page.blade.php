<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
</head>
<body>
    <h1>Quizzes</h1>
    <ul>
        @foreach ($quizzes as $quiz)
            <li>
                <h2>{{ $quiz->name }}</h2>
                <p>{{ $quiz->description }}</p>
                <a href="/quizzes/{{ $quiz->id }}/update">edit</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
