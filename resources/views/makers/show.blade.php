@extends('layout')

@section('content')
    <h1>"{{ $maker->name }}" karosszéria</h1>
    <div class="row">
        <div>{{ $maker->id }}</div>
        <div>{{$maker->name}}</div>
    </div>
@endsection 