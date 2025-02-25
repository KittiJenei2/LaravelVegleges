@extends('layout')

@section('content')
<h1 class="title">Járművek</h1>
<div>
    @include('success')
    <a href="{{ route('vehicles.create') }}">
        <button class="btn btn-success new-btn"><i class="fa fa-plus" title="Új"></i> Új</button>
    </a>
</div>

<table class="custom-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Alvázszám</th>
            <th>Rendszám</th>
            <th>Gyártó</th>
            <th>Karosszéria</th>
            <th>Modell</th>
            <th>Műveletek</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vehicles as $vehicle)
            <tr>
                <td>{{ $vehicle->id }}</td>
                <td>{{ $vehicle->vin }}</td>
                <td>{{ $vehicle->reg_plate }}</td>
                <td>{{ $vehicle->makers_id }}</td>
                <td>{{ $vehicle->bodies_id }}</td>
                <td>{{ $vehicle->models_id}}</td>
                <td class="actions">
    <a href="{{ route('vehicles.show', $maker->id) }}" class="btn btn-info action-btn">
        <i class="fa fa-binoculars" title="Mutat"></i> Mutat
    </a>
    <a href="{{ route('vehicles.edit', $maker->id) }}" class="btn btn-warning action-btn">
        <i class="fa fa-edit edit" title="Módosít"></i> Módosít
    </a>
    <form action="{{ route('vehicles.destroy', $maker->id) }}" method="POST" class="inline-form">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger action-btn" name="btn-del-fuel">
            <i class="fa fa-trash-can trash" title="Töröl"></i> Töröl
        </button>
    </form>
</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

