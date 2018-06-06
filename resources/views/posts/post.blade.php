<div class="post-preview">
    <a href="posts/{{$post->id}}">
        <h2 class="post-title">
            {{$post->title}}
        </h2>
        <h3 class="post-subtitle">
            {{$post->body}}
        </h3>
    </a>
    <p class="post-meta">
        Published at {{ $post->created_at->format('d/m/Y')}}
    </p>

    @php
        if (\Illuminate\Support\Facades\Auth::user()->can('delete', \App\Post::class)) {
            echo "<p><a href=/delete/$post->id>Delete post</a></p>";
        }
    @endphp
</div>
<hr>