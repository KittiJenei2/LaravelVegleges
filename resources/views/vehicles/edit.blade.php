@extends('layout')

@section('content')
    <div>
        @include('error')
        <form action="{{ route('vehicles.update', $vehicle->id) }}" method="post">
            @csrf
            @method('PATCH')

            <fieldset>
                <label for="makers_id">Gyártó</label>
                <select id="makers_id" name="makers_id" required>
                    @foreach($makers as $maker)
                        <option value="{{ $maker->id }}" {{ $vehicle->makers_id == $maker->id ? 'selected' : '' }}>
                            {{ $maker->name }}
                        </option>
                    @endforeach
                </select>
            </fieldset>

            <fieldset>
                <label for="models_id">Modell</label>
                <select id="models_id" name="models_id" required>
                    @foreach($models as $model)
                        <option value="{{ $model->id }}" {{ $vehicle->models_id == $model->id ? 'selected' : '' }}>
                            {{ $model->name }}
                        </option>
                    @endforeach
                </select>
            </fieldset>

            <fieldset>
                <label for="bodies_id">Karosszéria</label>
                <select id="bodies_id" name="bodies_id" required>
                    @foreach($bodies as $body)
                        <option value="{{ $body->id }}" {{ $vehicle->bodies_id == $body->id ? 'selected' : '' }}>
                            {{ $body->name }}
                        </option>
                    @endforeach
                </select>
            </fieldset>

            <fieldset>
                <label for="reg_plate">Rendszám</label>
                <input type="text" id="reg_plate" name="reg_plate" required value="{{ old('reg_plate', $vehicle->reg_plate) }}">
            </fieldset>

            <fieldset>
                <label for="vin">Alvázszám</label>
                <input type="text" id="vin" name="vin" required value="{{ old('vin', $vehicle->vin) }}">
            </fieldset>

            <button type="submit">Ment</button>
            <a href="{{ route('vehicles.index') }}">Mégse</a>
        </form>
    </div>
@endsection
