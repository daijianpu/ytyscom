@extends('_layouts.master')

@section('title', $page->title)
<hr>
@section('content')
    <h1>{{ $page->title }}</h1>

    @if ($page->image)
        <img src="{{ $page->image }}" style="object-fit: cover; height: 250px; width: 100%;">
    @endif
<hr>
    <p>
        @foreach ($page->tags as $tag)
            <a href="/tags/{{ $tag }}">{{ $tag }}</a>
            {{ $loop->last ? '' : '-' }}
        @endforeach
    </p>

    <blockquote data-phpdate="{{ $page->date }}">
        <em></em>
    </blockquote>
    <hr>
    @yield('postContent')

    @include('_partials.share')

    @if ($page->comments)
        @include('_partials.comments')
    @else
     <p></p>
    @endif
@endsection
