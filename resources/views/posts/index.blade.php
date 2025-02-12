@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
    <div class="container">
        <h1 class="mb-4">All Blog Posts</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>

        @if($posts->count() > 0)
            <div class="list-group">
                @foreach($posts as $post)
                    <a href="{{ route('posts.show', $post->id) }}" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">{{ $post->title }}</h5>
                        <small>By {{ $post->author ?? 'Unknown' }} | {{ $post->created_at->format('d M Y') }}</small>
                    </a>
                @endforeach
            </div>
        @else
            <p class="text-muted">No posts available.</p>
        @endif
    </div>
@endsection
