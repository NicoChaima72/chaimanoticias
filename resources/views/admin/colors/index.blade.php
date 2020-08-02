@extends('admin.layouts.app')
@section('description', 'Listado colores')
@section('title', 'Listado colores')
@push('links')
<link rel="stylesheet" href="/adminlte/css/datatables/dataTables.bootstrap4.min.css">
<style>
	.dataTables_info {
		overflow: auto;
	}
</style>
@endpush

@section('content-title', 'Lista colores')
@section('content-button')
<a class="btn btn-primary" href="{{ route('admin.colors.create') }}">
	<i class="fas fa-plus"></i> Agregar color
</a>
@endsection


@section('content')

@if (session()->has('message'))
<div class="alert {{ session('alert') }}">
	<i class="{{ session('icon') }} mr-2"></i> {!! session('message') !!}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif

<div class="card">
	<div class="card-header">
		<h3 class="card-title">Todos los colores</h3>
	</div>
	<div class="card-body" style="overflow: auto">

		<table id="tablaNoticias" class="table table-bordered">
			<thead>
				<tr>
					<th>Descripcion</th>
					<th>Fondo</th>
					<th>Texto</th>
					<th>Ejemplo</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($colors as $color)
				<tr>
					<td>{{ $color->description }}</td>
					<td>
						<div class="d-flex align-items-center">
							<div class="rounded-circle border mr-2"
								style="width: 20px; height: 20px; background: {{ $color->background }}">
							</div>
							{{ $color->background }}
						</div>
					</td>
					<td>
						<div class="d-flex align-items-center">
							<div class="rounded-circle border mr-2" style="width: 20px; height: 20px; background: {{ $color->text }}">
							</div>
							{{ $color->text }}
						</div>
					</td>
					<td>
						<span class="p-2 rounded badge" style="color: {{ $color->text }}; background: {{ $color->background }}">
							Ejemplo
						</span>
					</td>
					<td>
						<div class="d-flex">
							<a href="{{ route('admin.colors.edit', $color) }}" class="btn btn-sm btn-warning mx-1">
								<i class="fas fa-pen"></i>
							</a>
							<a href="" class="btn btn-sm btn-outline-danger mx-1"
								onclick="showMessage(event, '{{ $color->description }}', 'form-destroy-{{ $color->id }}');">
								<i class="fas fa-trash"></i>
							</a>
							{{-- <a class="btn btn-sm btn-outline-danger mx-1" onclick="
								event.preventDefault();
								confirm('¿Eliminar ' + {{ $color->description }} + '?')
							? document.getElementById('form-destroy-' + {{ $color->id }}).submit() : ''"> --}}
							{{-- <i class="fas fa-trash"></i> --}}
							{{-- </a> --}}
							<form id="form-destroy-{{ $color->id }}" action="{{ route('admin.colors.destroy', $color) }}"
								method="POST" class="d-none">
								@csrf @method("DELETE")
							</form>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection


@push('scripts')
<script src="/adminlte/js/datatables/jquery.dataTables.min.js"></script>
<script src="/adminlte/js/datatables/dataTables.bootstrap4.min.js"></script>
<script src="/adminlte/js/datatables/dataTables.responsive.min.js"></script>
<script src="/adminlte/js/datatables/responsive.bootstrap4.min.js"></script>
<script>
	$('#tablaNoticias').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "autoWidth": false,
      "responsive": true,
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
      }
		});


		const showMessage = (e,title, id) => {
			e.preventDefault();
			swal.fire({
				title: '¿Estás seguro?',
				text: `Eliminar ${title}`,
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Eliminar',
				cancelButtonText: 'Cancelar',
			}).then((result) => {
				if (result.value) {
					$(`#${id}`).submit();
				}
			})
		}
</script>
@endpush
