<x-app-layout>
    <h1>All posts</h1>
    <a href="{{ route('posts.create') }}">Create</a>
    <ul>
    <br>
        @foreach($posts as $post)
            <li>
                <h2>Title: {{ $post->title }}</h2>
                <p>Content: {{ $post->content }}</p>
                <div>
                    <a href="{{ route('posts.show', $post) }}">Show</a>
                    <a href="{{ route('posts.edit', $post) }}">Edit</a>
                    
                    <form href="{{ route('posts.destroy', $post) }}" method="Post">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                    </form>
                    <br>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>