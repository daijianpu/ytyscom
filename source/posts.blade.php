@extends('_layouts.master')

@section('title', '博客')

@section('content')
    <h1>博客</h1>

    <ul>
        @forelse ($posts->sortBy('title') as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <small>{{ $post->prettyDate('Y-m-d') }}</small>
            </li>
        @empty
            <p>暂时没有发表博客！</p>
        @endforelse
    </ul>
@endsection
