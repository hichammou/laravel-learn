<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $feilds = $request->validate([
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);

        Post::create($feilds);
        return to_route('posts.index');
    }
}
