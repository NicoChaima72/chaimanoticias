@extends('admin.layouts.app')
@section('description', 'Agregar subcategoria')
@section('title', 'Agregar subcategoria')
@push('links')
@endpush

@section('content-title', 'Agregar subcategoria')
@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Ingresar informacion</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="categoria">Categoria</label>
          <select name="categoria_id" id="categoria" class="form-control">
            <option value="" selected disabled>-- Categoria --</option>
          </select>
        </div>
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" name="nombre" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="importancia">Importancia</label>
          <select name="importancia_id" id="importancia" class="form-control">
            <option value="" selected disabled>-- Importancia --</option>
          </select>
        </div>
        <div class="form-group">
          <label for="color">Color</label>
          <select name="color_id" id="color" class="form-control">
            <option value="" selected disabled>-- Color --</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-4 p-2">Agregar subcategoria</button>
      </div>
    </div>
  </div>
</div>
@endsection