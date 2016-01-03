@extends('template.page')

@section('title', 'Delete')

@section('content')
<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
    {!! Form::model($contact, ['method' => 'DELETE', 'url' => ['contact', $contact->id]]) !!}
        @include('contact.form', ['submitButtonText' => 'Delete'])
    {!! Form::close() !!}
</section>
@stop

