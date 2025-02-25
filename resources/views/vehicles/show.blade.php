@extends('layout')

@section('content')
    <h1>"{{ $vehicle->name }}" Jármű</h1>
    <div class="row">
        <div>{{ $vehicle->id }}</div>
        <div>{{$vehicle->name}}</div>
    </div>
@endsection 
