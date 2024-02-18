@extends('layouts.layout')
@section('content')
    <div>
        <h1 class="text-3xl font-semibold my-5">All Posts</h1>
        <div class="flex gap-2 flex-wrap">
            @foreach ($posts as $post)
                <div class="py-2 px-4 space-y-3 border bg-gray-100">
                    <h2 class="border-b py-2 text-lg font-semibold">{{ $post->title }}</h2>
                    <p>{{ $post->content }}
                    <p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
