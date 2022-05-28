@extends('_layouts.master')

@section('title', $page->title)

@section('content')
    <h1>{{ $page->title }}</h1>
<hr>
    @if ($page->image)
        <img src="{{ $page->image }}" style="object-fit: cover; height: 300px; width: 100%;">
    @endif
    <p>
        @foreach ($page->tags as $tag)
         <a href="/tags/{{ $tag }}">{{ $tag }}</a>
            {{ $loop->last ? '' : '-' }}
        @endforeach
    </p>
    <blockquote data-phpdate="{{ $page->date }}">
        <em></em>
    </blockquote>
    @yield('postContent')
<hr>
    @include('_partials.share')

    @if ($page->comments)
        @include('_partials.comments')
    @else
     <p></p>
    @endif
@endsection
