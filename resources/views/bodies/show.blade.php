@extends('layout')

@section('content')
    <h1>"{{ $body->name }}" karosszéria</h1>
    <div class="row">
        <div>{{ $body->id }}</div>
        <div>{{$body->name}}</div>
    </div>
@endsection 
