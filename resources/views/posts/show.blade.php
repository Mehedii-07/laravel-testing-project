<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>

<a href="/posts/{{ $post->id }}/edit">Edit</a>

<form method="POST" action="/posts/{{ $post->id }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>