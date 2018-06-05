@extends('layouts.master')

@section('content')
            <div class="col-lg-8 col-md-10 mx-auto">

                @foreach($posts as $post)
                    @include('posts.post')
                @endforeach

            </div>

    @endsection