@extends('layouts.app')

@section('content')
    <h1>{{ $page->title }}</h1>
    <div>
        {!! $page->mark_body !!}
    </div>
    <div>
        {!! link_to_route('pages.edit', 'ページを作成', [$page->id]) !!}
    </div>
@endsection