@extends('layout')

@section('content')
    <h1>"{{ $vehicle->reg_plate }}" Jármű</h1>
    <div class="row">
        <div>{{ $vehicle->id }}</div>
        <div>{{$vehicle->reg_plate}}</div>
    </div>
@endsection 
