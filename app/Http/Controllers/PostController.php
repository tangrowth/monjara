<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' =>$post->getByLimit()]);
    }
    
    public function show(Post $Post)
    {
        return view('posts/shows')->with(['post' => $post]);
    }
    
    public function create()
    {
        return view('posts/create');
    }
}
?>