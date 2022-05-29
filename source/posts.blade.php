@extends('_layouts.master')

@section('title', '文章')

@section('content')
    <h1>文章</h1>

    <ul>
        @forelse ($posts->sortBy('title', 'desc') as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <small>{{ $post->prettyDate('Y-m-d') }}</small>
            </li>
        @empty
            <p>暂时没有发表博客！</p>
        @endforelse
    </ul>
@endsection
