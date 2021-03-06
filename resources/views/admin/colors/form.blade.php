@extends('admin.layouts.app')
{{-- {{ dd($action === 'create') }}} --}}
@section('description', $action === 'create' ? 'Agregar color' : 'Actualizar color')
@section('title', $action === 'create' ? 'Agregar color' : 'Actualizar color')
@push('links')
<link rel="stylesheet" href="/adminlte/css/colors/bootstrap-colorpicker.min.css">
@endpush

@section('content-title', $action === 'create' ? 'Agregar color' : 'Actualizar color')

@section('content')
<div class="row">
	<div class="col-md-6">
		<form method="POST" class="card card-primary"
			action="{{ $action === 'create' ? route('admin.colors.store') : route('admin.colors.update', $color) }}">

			@if ($action !== 'create') @method('PUT') @endif
			@csrf
			<div class="card-header">
				<h3 class="card-title">Ingresar informacion</h3>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label for="description">Descripcion:</label>
					<input type="text" id="description" class="form-control @error('description') is-invalid @enderror"
						name="description" autocomplete="off" value="{{ old('description', $color->description) }}" required>
					@error('description')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="background">Color de fondo:</label>
					<div class="input-group my-colorpicker2 color-fondo">
						<input type="text" id="background" class="form-control @error('background') is-invalid @enderror"
							name="background" autocomplete="off" value="{{ old('background', $color->background) }}" required>
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-square"></i></span>
						</div>
					</div>
					@error('background')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="text">Color de texto:</label>
					<div class="input-group my-colorpicker2 color-texto">
						<input type="text" id="text" class="form-control  @error('text') is-invalid @enderror" name="text"
							autocomplete="off" value="{{ old('text', $color->text) }}" required>
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-square"></i></span>
						</div>
					</div>
					@error('text')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<button type="submit" class="btn btn-primary btn-block mt-4 p-2">
					{{ $action === 'create' ? 'Agregar color' : 'Actualizar color' }}
				</button>
			</div>
		</form>
	</div>
</div>
@endsection
@push('scripts')
<script src="/adminlte/js/colors/bootstrap-colorpicker.min.js"></script>
<script>
	$('#background').val() != '' ? $('.color-fondo .fa-square').css('color', $('#background').val()) : '';
	$('#text').val() != '' ? $('.color-texto .fa-square').css('color', $('#text').val()) : '';
	$('.color-fondo').colorpicker();
  $('.color-fondo').on('colorpickerChange', function(event) {
      $('.color-fondo .fa-square').css('color', event.color.toString());
  });
  $('.color-texto').colorpicker();
  $('.color-texto').on('colorpickerChange', function(event) {
      $('.color-texto .fa-square').css('color', event.color.toString());
  });
</script>
@endpush
