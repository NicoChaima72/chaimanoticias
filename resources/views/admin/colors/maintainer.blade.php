@extends('admin.layouts.app')
@section('description', 'Agregar color')
@section('title', 'Agregar color')
@push('links')
<link rel="stylesheet" href="/adminlte/css/colors/bootstrap-colorpicker.min.css">
@endpush

@section('content-title', 'Agregar color')
@section('content')
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Ingresar informacion</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="descripcion">Nombre:</label>
              <input type="text" class="form-control" name="descripcion" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="fondo">Color de fondo:</label>
              <div class="input-group my-colorpicker2 color-fondo">
                <input type="text" class="form-control" name="fondo">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-square"></i></span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="texto">Color de texto:</label>
              <div class="input-group my-colorpicker2 color-texto">
                <input type="text" class="form-control" name="texto">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-square"></i></span>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4 p-2">Agregar color</button>
          </div>
        </div>
      </div>
    </div>
@endsection
@push('scripts')
<script src="/adminlte/js/colors/bootstrap-colorpicker.min.js"></script>
<script>
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