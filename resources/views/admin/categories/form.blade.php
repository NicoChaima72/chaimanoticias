@extends('admin.layouts.app')
@section('description', $action === 'create' ? 'Agregar categoria' : 'Actualizar categoria')
@section('title', $action === 'create' ? 'Agregar categoria' : 'Actualizar categoria')
@push('links')
@endpush

@section('content-title', $action === 'create' ? 'Agregar categoria' : 'Actualizar categoria')
@section('content')
<div class="row">
	<div class="col-md-6">
		<form
			action="{{ $action === 'create' ? route('admin.categories.store') : route('admin.categories.update', $category) }}"
			method="POST" class="card card-primary">
			@if ($action !== 'create') @method('PUT') @endif
			@csrf
			<div class="card-header">
				<h3 class="card-title">Ingresar informacion</h3>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label for="description">Descripcion:</label>
					<input type="text" id="description" class="form-control @error('description') is-invalid @enderror"
						name="description" autocomplete="off" value="{{ old('description', $category->description) }}">
					@error('description')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="color_id">Color</label>
					<select name="color_id" id="color" class="form-control @error('color_id') is-invalid @enderror">
						<option value="" selected disabled>-- Selecciona color --</option>
						@foreach ($colors as $color)
						<option value="{{ $color->id }}"
							{{ old('color_id', $action != 'create' ? $category->color->id : null) ==  $color->id ? 'selected' : null }}>
							{{ $color->description }}
						</option>
						@endforeach
					</select>
					@error('color_id')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<button type="submit"
					class="btn btn-primary btn-block mt-4 p-2">{{ $action === 'create' ? 'Agregar categoria' : 'Actualizar categoria' }}</button>
			</div>
		</form>
	</div>
</div>
@endsection
