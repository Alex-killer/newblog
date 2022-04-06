<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(9);
        return view('blog.posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('blog.posts.show', compact('post'));
    }
}
