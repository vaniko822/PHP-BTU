<!DOCTYPE html>
<html>

<body>

    @if (isset($quizz))
        <h2>Update Quizz: $quizz['name']</h2>
    @else
        <h2>Create Quizz</h2>
    @endif

    <form action="/quizzes" method="POST">
        @csrf
        @if (isset($quizz))
        <input type="hidden" name="id" value="{{$quizz['id']}}">
        @endif
        <label for="name">Quizz name:</label><br>
        <input type="text" id="name" name="name" value="{{ isset($quizz) ? $quizz->name : '' }}"><br>
        <label for="description">Quizz description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50">{{ isset($quizz) ? $quizz->description : '' }}</textarea>
        <br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>
