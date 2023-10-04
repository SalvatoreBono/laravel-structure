@extends('layouts.public')
@section('title', 'Edit')
@section('content')
    @include('names.forms.upsert', [
        /* 'action' => route('names.update', name->id), */
        'method' => 'PUT',
        'name' => $name,
    ])
@endsection
