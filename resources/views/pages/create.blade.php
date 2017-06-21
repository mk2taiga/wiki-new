@extends('layouts.app')

@section('content')
    <h1>Form</h1>
    
    {!! Form::model($page, ['route' => 'pages.store']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title',null,  ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('body', 'Body') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>
        
        {!! Form::submit('送信', ['class' => 'form-control btn-primary']) !!}
    {!! Form::close() !!}
@endsection