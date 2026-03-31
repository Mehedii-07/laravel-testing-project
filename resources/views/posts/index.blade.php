<h1>My Blog Posts</h1>
@foreach($posts as $post)
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
    <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
@endforeach