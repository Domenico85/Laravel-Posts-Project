@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <div class="text-center">
        <h1>Welcome to My Blog</h1>
        <p>This is a simple blog application built with Laravel and Bootstrap.</p>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create a New Post</a>
    </div>
@endsection
