@extends('admin.layouts.app')
@section('description', 'Listado categorias')
@section('title', 'Listado categorias')
@push('links')
<link rel="stylesheet" href="/adminlte/css/datatables/dataTables.bootstrap4.min.css">
<style>
	.dataTables_info {
		overflow: auto;
	}
</style>
@endpush

@section('content-title', 'Lista categorias')
@section('content-button')
<a class="btn btn-primary" href="{{ route('admin.categories.create') }}">
	<i class="fas fa-plus"></i> Agregar categoria
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
		<h3 class="card-title">Todas las categorias</h3>
	</div>
	<div class="card-body" style="overflow: auto">

		<table id="tablaInformacion" class="table table-bordered">
			<thead>
				<tr>
					<th>Descripcion</th>
					<th>Color</th>
					<th>n° Noticias</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($categories as $category)
				<tr>
					<td>{{ $category->description }}</td>
					<td>
						<span class="badge badge-primary"
							style="background: {{ $category->color->background }}; color: {{ $category->color->text }}">
							Ejemplo
						</span>
					</td>
					<td>{{ $category->countNews() }}</td>
					<td>
						<div class="d-flex">
							<a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-warning mx-1">
								<i class="fas fa-pen"></i>
							</a>
							<a href="" class="btn btn-sm btn-outline-danger mx-1"
								onclick="showMessage(event, '{{ $category->description }}', 'form-destroy-{{ $category->id }}', {{ $category->countNews() }});">
								<i class="fas fa-trash"></i>
							</a>
							<form id="form-destroy-{{ $category->id }}" action="{{ route('admin.categories.destroy', $category) }}"
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
	$('#tablaInformacion').DataTable({
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


		const showMessage = (e,title, id, countNews) => {
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
					countNews == 0 ? $(`#${id}`).submit() : showMessageError();
				}
			})
		}

		const showMessageError = () => {
			swal.fire({
				icon: 'error',
				title: 'No permitido',
				text: 'No se puede borrar esta categoria porque contiene noticias asociadas',
			});
		}
</script>
@endpush
