<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('blog.admin.posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('blog.admin.posts.show', compact('post'));
    }

    public function create()
    {
        return view('blog.admin.posts.create');
    }
}
