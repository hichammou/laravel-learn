<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
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

        dd($feilds);
    }
}
