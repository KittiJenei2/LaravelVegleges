@extends('layout')

@section('content')
<h1 class="title">Gyártók</h1>
<div>
    @include('success')
    <a href="{{ route('makers.create') }}">
        <button class="btn btn-success new-btn"><i class="fa fa-plus" title="Új"></i> Új</button>
    </a>
</div>

<table class="custom-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Név</th>
            <th>Műveletek</th>
        </tr>
    </thead>
    <tbody>
        @foreach($makers as $maker)
            <tr>
                <td>{{ $maker->id }}</td>
                <td>{{ $maker->name }}</td>
                <td class="actions">
    <a href="{{ route('makers.show', $maker->id) }}" class="btn btn-info action-btn">
        <i class="fa fa-binoculars" title="Mutat"></i> Mutat
    </a>
    <a href="{{ route('makers.edit', $maker->id) }}" class="btn btn-warning action-btn">
        <i class="fa fa-edit edit" title="Módosít"></i> Módosít
    </a>
    <form action="{{ route('makers.destroy', $maker->id) }}" method="POST" class="inline-form">
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
