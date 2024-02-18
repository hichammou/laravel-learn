@extends('layouts.layout')
@section('content')
    <div>
        <h1 class="text-3xl font-semibold my-5">Create Post</h1>
        <form action="{{ route('posts.store') }}" method="POST" class="flex flex-col gap-y-3">
            @csrf
            @method('POST')
            <input type="text" name="title" value="{{ old('title') }}" />
            @error('title')
                <p class="text-red-500 bg-red-200 p-3 rounded-md text-xs">{{ $message }}</p>
            @enderror
            <input type="text" name="content" value="{{ old('content') }}" />
            @error('content')
                <p class="text-red-500 bg-red-200 p-3 rounded-md text-xs">{{ $message }}</p>
            @enderror
            <button class="bg-green-300 text-green-800 px-4 py-2 border border-green-500" type="submit">Add</button>
        </form>
    </div>
@endsection
