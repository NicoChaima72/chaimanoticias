<nav class="mt-2">
	<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		<li class="nav-item">
			<a href="{{ route('admin.dashboard') }}" class="nav-link {{ setActiveRoute('admin.dashboard') }}">
				<i class="nav-icon fas fa-tachometer-alt"></i>
				<p>
					Dashboard
					<span class="right badge badge-danger">New</span>
				</p>
			</a>
		</li>
		<li class="nav-item has-treeview {{ setMenuOpen('admin.news*') }}">
			<a href="#" class="nav-link {{ setActiveRoute('admin.news*') }}">
				<i class="nav-icon fas fa-newspaper"></i>
				<p>
					Noticias
					<i class="right fas fa-angle-left"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="../../index.html" class="nav-link {{ setActiveRoute('admin.news') }}">
						<i class="far fa-circle nav-icon"></i>
						<p>Mis noticias</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="../../index2.html" class="nav-link {{ setActiveRoute('admin.news.create') }}">
						<i class="far fa-circle nav-icon"></i>
						<p>Agregar noticia</p>
					</a>
				</li>
			</ul>
		</li>
		<li class="nav-item has-treeview {{ setMenuOpen('admin.colors*') }}">
			<a href="#" class="nav-link  {{ setActiveRoute('admin.colors*') }}">
				<i class="nav-icon fas fa-palette"></i>
				<p>
					Colores
					<i class="right fas fa-angle-left"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item  {{ setActiveRoute('admin.colors') }}">
					<a href="{{ route('admin.colors.index') }}" class="nav-link {{ setActiveRoute('admin.colors.index') }}">
						<i class="far fa-circle nav-icon"></i>
						<p>Ver colores</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin.colors.create') }}" class="nav-link {{ setActiveRoute('admin.colors.create') }}">
						<i class="far fa-circle nav-icon"></i>
						<p>Agregar color</p>
					</a>
				</li>
			</ul>
		</li>
		<li class="nav-item has-treeview {{ setMenuOpen('admin.categories*') }}">
			<a href="#" class="nav-link {{ setActiveRoute('admin.categories*') }}">
				<i class="nav-icon fas fa-award"></i>
				<p>
					Categorias
					<i class="right fas fa-angle-left"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="{{ route('admin.categories.index') }}"
						class="nav-link {{ setActiveRoute('admin.categories.index') }}">
						<i class="far fa-circle nav-icon"></i>
						<p>Ver categorias</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('admin.categories.create') }}"
						class="nav-link {{ setActiveRoute('admin.categories.create') }}">
						<i class="far fa-circle nav-icon"></i>
						<p>Agregar categoria</p>
					</a>
				</li>
			</ul>
		</li>
		<li class="nav-item has-treeview">
			<a href="#" class="nav-link">
				<i class="nav-icon fas fa-asterisk"></i>
				<p>
					Subcategorias
					<i class="right fas fa-angle-left"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="../../index.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Ver subcategorias</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="../../index2.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Agregar subcategoria</p>
					</a>
				</li>
			</ul>
		</li>
		<li class="nav-item has-treeview">
			<a href="#" class="nav-link">
				<i class="nav-icon fas fa-star"></i>
				<p>
					Importancia
					<i class="right fas fa-angle-left"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="../../index.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Ver importancias</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="../../index2.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Agregar importancia</p>
					</a>
				</li>
			</ul>
		</li>
		<li class="nav-item has-treeview">
			<a href="#" class="nav-link">
				<i class="nav-icon fas fa-users"></i>
				<p>
					Usuarios
					<i class="right fas fa-angle-left"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="../../index.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Ver usuarios</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="../../index2.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Agregar usuario</p>
					</a>
				</li>
			</ul>
		</li>
		<li class="nav-item has-treeview">
			<a href="#" class="nav-link">
				<i class="nav-icon fas fa-users"></i>
				<p>
					Roles
					<i class="right fas fa-angle-left"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="../../index.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Ver roles</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="../../index2.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Agregar rol</p>
					</a>
				</li>
			</ul>
		</li>
		<li class="nav-item has-treeview">
			<a href="#" class="nav-link">
				<i class="nav-icon fas fa-users"></i>
				<p>
					Permisos
					<i class="right fas fa-angle-left"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="../../index.html" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Ver permisos</p>
					</a>
				</li>
			</ul>
		</li>
	</ul>
</nav>
