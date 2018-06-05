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
</div>
<hr>