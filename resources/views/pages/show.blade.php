@extends('layouts.app')

@section('content')
    <h1>{{ $page->title }}</h1>
    <div>
        {!! $page->mark_body !!}
    </div>
@endsection