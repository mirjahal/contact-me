@extends('template.page')

@section('title', 'Create')

@section('content')
<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
    {!! Form::open(['url' => 'contact']) !!}
        @include('contact.form', ['submitButtonText' => 'Save'])
    {!! Form::close() !!}
</section>
@stop

