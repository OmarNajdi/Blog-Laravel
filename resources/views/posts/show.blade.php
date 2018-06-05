@extends('layouts.master')

@section('content')
    <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
            <a href="#">
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

        <div class="comments">
            <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong>{{$comment->created_at->diffForHumans()}}</strong>:
                    {{$comment->body}}
                </li>
            @endforeach
            </ul>
        </div>


        <hr>

        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{$post->id}}/comments">
                    {{csrf_field()}}
                    <div class="form-group">
                        <textarea name="body" placeholder="Leave a comment.." class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
            </div>
        </div>


    </div>

@endsection