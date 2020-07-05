@extends('admin.layouts.app')
@section('description', 'Agregar importancia')
@section('title', 'Agregar importancia')
@push('links')
@endpush

@section('content-title', 'Agregar importancia')
@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Ingresar informacion</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="descripcion">Descripcion:</label>
          <input type="text" class="form-control" name="descripcion" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="importancia">Importancia:</label>
          <input type="number" class="form-control" name="importancia" autocomplete="off" max="100" min="0">
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-4 p-2">Agregar importancia</button>
      </div>
    </div>
  </div>
</div>
@endsection
@push('scripts')
  {{-- <script>
    const soloNumeros = (e) => {
      let key = window.Event ? e.which : e.keyCode;
      return ((key >= 48 && key <= 57) || (key == 8));
    }
  </script> --}}
@endpush