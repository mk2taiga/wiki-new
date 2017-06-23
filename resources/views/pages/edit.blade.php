@extends('layouts.app')

@section('content')

    <h1>Form</h1>
    
    {!! Form::model($page, ['route' => ['pages.update', $page->id], 'method' => 'put']) !!}
        @include('pages.pages')
    {!! Form::close() !!}

@endsection