@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <ul>
        @if (count($pages) > 0)
            @foreach ($pages as $page)
                <li>
                    {!! link_to_route('pages.show', $page->title, ['id' => $page->id]) !!}
                </li>
            @endforeach
        @endif
    </ul>
@endsection