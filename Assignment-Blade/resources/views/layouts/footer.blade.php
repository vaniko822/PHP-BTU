<footer>
    <br>
        <h3>Subscribe Form</h3>
        <form method="POST" action="{{ url('/subscribe') }}">
            @csrf
            <label for="email">Subscribe to our newsletter:</label>
            <input type="email" name="email" id="email" required>
            <button type="submit">Subscribe</button>
        </form>
</footer>