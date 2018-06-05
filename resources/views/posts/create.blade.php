@extends('layouts.master')

@section('content')
    <div class="row main">
        <div class="main-login main-center ">
            <form method="POST" action="posts">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Body</label>
                    <textarea name="body" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>        </div>
    </div>
@endsection
