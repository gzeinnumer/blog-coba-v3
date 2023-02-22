<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index',[
            'title'=> 'Posts',
            'active' => 'posts', 
            'posts' =>Post::all()]);

    }

    public function single(Post $post)
    {
        return view('posts.single-post',[
            'title'=> 'Single Post',
            'active' => 'posts', 
            'single_posts' => $post
         ]);
    }
}