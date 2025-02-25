@extends('layout')
 
        <main>
            @yield('content')
        </main>
 
   
@section('content')

<fieldset>
	<label for="makers_id">Gyártó</label>
		<select name="makers_id" id="select-makers" title="Gyártók">
			<option value="0">-- Válassz gyártót --</option>
			@foreach($makers as $maker)
				<option value="{{ $maker->id }}">{{ $maker->name }}</option>
			@endforeach
		</select>
</fieldset>
<fieldset>
	<label for="models_id">Model</label>
		<select name="models_id" id="select-model"  title="Modellek">
			<option value="0">-- Válassz modelt --</option>
			@foreach($models as $model)
				<option value="{{ $model->id }}">{{ $model->name }}</option>
			@endforeach
		</select>
</fieldset>

@endsection
