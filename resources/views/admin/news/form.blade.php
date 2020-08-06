@extends('admin.layouts.app')
@section('description', $action === 'create' ? 'Agregar noticia' : 'Actualizar noticia')
@section('title', $action === 'create' ? 'Agregar noticia' : 'Actualizar noticia')
@push('links')
@endpush

@section('content-title', $action === 'create' ? 'Agregar noticia' : 'Actualizar noticia')

@section('content')
<form action="{{ $action === 'create' ? route('admin.news.store') : route('admin.categories.update', $news) }}"
	method="POST" class="card card-primary">
	@csrf @if ($action !== 'create') @method('PUT') @endif
	<div class="card-header">
		<h3 class="card-title">Ingresar informacion</h3>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-5">
				<div class="form-group">
					<label for="category_id">Categoria</label>
					<select name="category_id" id="category" class="form-control @error('category_id') is-invalid @enderror">
						<option value="" selected disabled>-- Selecciona categoria --</option>
						@foreach ($categories as $category)
						<option value="{{ $category->id }}"
							{{ old('category_id', $news->category_id) ==  $category->id ? 'selected' : null }}>
							{{ $category->description }}
						</option>
						@endforeach
					</select>
					@error('category_id')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="title">Titulo</label>
					<textarea name="title" id="title" rows="2"
						class="form-control @error('title') is-invalid @enderror">{{ old('title', $news->title) }}</textarea>
					@error('title')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="excerpt">Extracto</label>
					<textarea name="excerpt" id="title" rows="5"
						class="form-control @error('excerpt') is-invalid @enderror">{{ old('excerpt', $news->excerpt) }}</textarea>
					@error('excerpt')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			</div>
			<div class="col-md-7">
				<div class="form-group">
					<label for="body">Contenido</label>
					<textarea name="body" id="title" rows="10"
						class="form-control @error('body') is-invalid @enderror">{{ old('body', $news->body) }}</textarea>
					@error('body')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			</div>
		</div>
		<button type="submit"
			class="btn btn-primary btn-block mt-4 p-2">{{ $action === 'create' ? 'Agregar noticia' : 'Actualizar noticia' }}</button>
	</div>
</form>
@endsection
