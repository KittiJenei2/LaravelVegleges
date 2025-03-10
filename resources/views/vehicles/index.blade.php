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
                <td>{{ $vehicle->maker->name ?? 'Nincs adat' }}</td>
                <td>{{ $vehicle->model->name ?? 'N/A' }}</td>
                <td>{{ $vehicle->body->name ?? 'N/A' }}</td>

                <td class="actions">
    <a href="{{ route('vehicles.show', $vehicle->maker->id ?? 0) }}" class="btn btn-info action-btn">
        <i class="fa fa-binoculars" title="Mutat"></i> Mutat
    </a>
    <a href="{{ route('vehicles.edit', $vehicle->maker->id ?? 0) }}" class="btn btn-warning action-btn">
        <i class="fa fa-edit edit" title="Módosít"></i> Módosít
    </a>
    <form action="{{ route('vehicles.destroy', $vehicle->id) }}" method="POST" class="inline-form">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger action-btn">
        <i class="fa fa-trash-can trash" title="Töröl"></i> Töröl
    </button>
</form>

</td>

            </tr>
        @endforeach
    </tbody>
</table>

@endsection

