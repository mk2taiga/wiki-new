@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <ul>
        @if (count($pages) > 0)
            @foreach ($pages as $page)
                <li>
                    <a href="{{ $page->url }}">
                        {{ $page->title }}
                    </a>
                </li>
            @endforeach
        @endif
    </ul>
@endsection