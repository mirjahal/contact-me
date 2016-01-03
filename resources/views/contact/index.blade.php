@extends('template.page')

@section('title', 'Index')

@section('content')
<table class="bordered centered hoverable">
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>E-mail</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->phone }}</td>
            <td>{{ $contact->email }}</td>
            <td>
                <a href="/contact/{{ $contact->id }}" class="btn-flat">
                    <i class="material-icons left">zoom_in</i>show
                </a>
                <a href="/contact/{{ $contact->id }}/edit" class="btn-flat">
                    <i class="material-icons left">create</i>edit
                </a>        
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

