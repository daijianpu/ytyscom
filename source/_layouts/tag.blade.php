@extends('_layouts.master')

@section('title', "关键词： '{$page->name()}'")

@section('content')
    <h1>关键词： '{{ $page->name() }}'</h1>

    <ul>
        @forelse ($posts->filter->hasTag($page->name()) as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <small>{{ $post->prettyDate() }}</small>
            </li>
        @empty
            <p>暂时没有相关文章！</p>
        @endforelse
    </ul>
@endsection
