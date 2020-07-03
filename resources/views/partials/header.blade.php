<header class="w-full text-gray-700 bg-white fixed z-10 lg:shadow-sm">
  <div class="container flex justify-between items-center shadow-sm py-2 md:py-4">
    <div class="hidden lg:block flex-1">
      <ul class="flex space-x-16">
        <li class="cursor-pointer">
          <i class="btn-menu fas fa-bars text-2xl text-gray-900"></i>
        </li>
      </ul>
    </div>
    <div class="flex lg:justify-center flex-none w-2/3 md:w-auto">
      <div class="cursor-pointer w-full">
        <a href="/">
          <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-full max-w-xs">
        </a>
      </div>
    </div>
    <ul class="flex space-x-3 mr-1 items-center block lg:hidden">
      <li class="cursor-pointer">
        <i class="btn-buscar fas fa-search text-xl text-blue-700"></i>
      </li>
      <li class="cursor-pointer">
        <i class="btn-menu fas fa-bars text-2xl text-gray-900"></i>
      </li>
    </ul>
    <div class="hidden lg:block flex-1">
      <ul class="flex space-x-5 justify-end">
        <li class="flex items-center space-x-1 cursor-pointer">
          <i class="far fa-user text-xl"></i>
          <p class="text-sm">Ingresar</p>
        </li>
      </ul>
    </div>
  </div>
  <hr>
  <div class="container px-12 hidden lg:flex bg-white items-center justify-between py-3 space-x-16">
    <div class="w-full">
      <ul class="flex justify-between text-sm">
        <li>
          <a href="" class="hover:text-gray-600 cursor-pointer">Portada</a>
        </li>
        <li>
          <a href="" class="hover:text-gray-600 cursor-pointer">Nacional</a>
        </li>
        <li>
          <a href="" class="hover:text-gray-600 cursor-pointer">Mundo</a>
        </li>
        <li>
          <a href="" class="hover:text-gray-600 cursor-pointer">Tendencias</a>
        </li>
        <li>
          <a href="" class="hover:text-gray-600 cursor-pointer">Calidad de vida</a>
        </li>
        <li>
          <a href="" class="hover:text-gray-600 cursor-pointer">Deportes</a>
        </li>
        <li>
          <a href="" class="hover:text-gray-600 cursor-pointer">Dato útil</a>
        </li>
        <li>
          <a href="" class="hover:text-gray-600 cursor-pointer">Noticieros</a>
        </li>
        <li>
          <a href="" class="hover:text-gray-600 cursor-pointer">Reportajes</a>
        </li>
        <li>
          <a href="" class="hover:text-gray-600 cursor-pointer">Entrevistas</a>
        </li>
        <li>
          <a href="" class="hover:text-gray-600 cursor-pointer">Videos</a>
        </li>
      </ul>
    </div>
    <div class="cursor-pointer">
      <i class="btn-buscar fas fa-search text-blue-700 text-xl"></i>
    </div>
  </div>
</header>

<div class="py-8 md:py-10 md:pb-12 lg:pt-16 lg:pb-20"></div>

<section id="menu" class="hidden w-full h-screen fixed z-40 top-0 text-white overflow-y-auto pt-4 lg:pt-6 pb-16"
  style="background-color: rgba(43,108,176, .95)">
  <div class="container">
    <div class="flex items-start w-full">
      <div class="flex items-end">
        <img src="{{ asset('img/logo-claro.png') }}" alt="" class="w-56">
      </div>
      <i class="btn-menu fas fa-times ml-auto text-3xl mr-1 cursor-pointer"></i>
    </div>
    <form class="w-full flex px-2 mt-6 lg:mt-12">
      <input id="txtBuscar" name="buscar" class="outline-none bg-transparent border-b-2 text-white text-2xl font-medium flex-1 placeholder-gray-400"
        placeholder="buscar...">
      <button type="submit">
        <i class="fas fa-search text-2xl ml-2"></i>
      </button>
    </form>
    <div id="categorias" class="grid grid-cols-12 mt-16 lg:mt-24 col-gap-3 row-gap-12 px-2">
      <div class="col-span-6 md:col-span-4 lg:col-span-3">
        <h3 class="font-bold text-2xl md:text-3xl">Nacional</h3>
        <div class="mt-6 leading-normal md:text-lg">
          <h4>Coronavirus</h4>
          <h4>Salud</h4>
          <h4>Carpetas</h4>
        </div>
      </div>
      <div class="col-span-6 md:col-span-4 lg:col-span-3">
        <h3 class="font-bold text-2xl">Internacional</h3>
        <div class="mt-6 leading-normal">
          <h4>Coronavirus</h4>
          <h4>Salud</h4>
          <h4>Carpetas</h4>
        </div>
      </div>
      <div class="col-span-6 md:col-span-4 lg:col-span-3">
        <h3 class="font-bold text-2xl">Dato Util</h3>
        <div class="mt-6 leading-normal">
          <h4>Coronavirus</h4>
          <h4>Salud</h4>
          <h4>Carpetas</h4>
        </div>
      </div>
      <div class="col-span-6 md:col-span-4 lg:col-span-3">
        <h3 class="font-bold text-2xl">Dato Util</h3>
        <div class="mt-6 leading-normal">
          <h4>Coronavirus</h4>
          <h4>Salud</h4>
          <h4>Carpetas</h4>
        </div>
      </div>
      <div class="col-span-6 md:col-span-4 lg:col-span-3">
        <h3 class="font-bold text-2xl">Dato Util</h3>
        <div class="mt-6 leading-normal">
          <h4>Coronavirus</h4>
          <h4>Salud</h4>
          <h4>Carpetas</h4>
        </div>
      </div>
      <div class="col-span-6 md:col-span-4 lg:col-span-3">
        <h3 class="font-bold text-2xl">Dato Util</h3>
        <div class="mt-6 leading-normal">
          <h4>Coronavirus</h4>
          <h4>Salud</h4>
          <h4>Carpetas</h4>
        </div>
      </div>
    </div>
  </div>
</section>


<script>
  const body = document.getElementById('body');
  const menu = document.getElementById('menu');
  const txtBuscar = document.getElementById('txtBuscar');
  const categorias = document.getElementById('categorias');
  const botonesMenu = document.querySelectorAll('.btn-menu ');
  const botonesBuscar = document.querySelectorAll('.btn-buscar');

  menu.style.display = 'none';
  categorias.style.display = 'grid';
  
  botonesMenu.forEach(boton => {
    boton.addEventListener('click', () => {
      if (menu.style.display === 'none') {
        categorias.style.display = 'grid';
        body.style.overflow = 'hidden';
        menu.style.display = 'block';
      } else {
        body.style.overflow = 'auto';
        menu.style.display = 'none';
      }
    })
    botonesBuscar.forEach(boton => {
      boton.addEventListener('click', () => {
        body.style.overflow = 'hidden';
        categorias.style.display = 'none';
        menu.style.display = 'block';
        txtBuscar.focus();
      })
    });
  });
  
</script>