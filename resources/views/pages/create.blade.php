@extends('layouts.app')

@section('content')
    <h1>Form</h1>
    
    {!! Form::model($page, ['route' => 'pages.store']) !!}
        @include('pages.pages')
    {!! Form::close() !!}
@endsection