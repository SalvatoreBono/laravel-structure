@extends('layouts.public')
@section('title', 'Create')
@section('content')
    @include('names.forms.upsert', [
        //'action' => route('names.store'),
        'method' => 'POST',
        'name' => null,
    ])
@endsection
