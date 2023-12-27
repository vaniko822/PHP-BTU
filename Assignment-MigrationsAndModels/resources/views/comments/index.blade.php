@extends('layouts.app')

@section('content')
    <h1>Comments for Post: {{ $post->title }}</h1>

    <ul>
        @foreach ($comments as $comment)
            <li>
                {{ $comment->username }}: {{ $comment->comment }}
                <form method="POST" action="{{ route('comments.destroy', $comment->id) }}" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this comment?')">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <form id="commentForm">
        @csrf
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" rows="4" required></textarea>

        <button type="button" onclick="addComment()">Add Comment</button>
    </form>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function addComment() {
            const username = document.getElementById('username').value;
            const commentText = document.getElementById('comment').value;

            axios.post('{{ route('comments.store') }}', {
                username: username,
                comment: commentText,
                post_id: {{ $post->id }}
            })
            .then(function (response) {
                console.log(response.data);
            })
            .catch(function (error) {
                console.error(error);
            });
        }
    </script>
@endpush
