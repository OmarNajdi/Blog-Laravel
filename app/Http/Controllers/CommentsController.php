<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $this->validate($request, ['body' => 'required']);

        Comment::create([
            'post_id' => $post->id,
            'body' => request('body')
        ]);

        return back();
    }
}