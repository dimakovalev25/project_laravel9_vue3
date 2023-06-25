<?php

namespace App\Http\Controllers\Post;
use App\Http\Controllers\Controller;
use App\Models\Post;


class DeleteController extends Controller
{
    public function __invoke($post)
    {
        $post = Post::findOrFail($post);
        $post->delete();
        return $post;
    }
}
