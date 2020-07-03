@extends('layouts.app')
@section('title', 'Principales noticias')
@section('description', 'Las últimas noticias del mundo mundial')
@section('content')
@include('partials.coronavirus')

<main class="grid grid-cols-12 lg:mt-4">
	<section class="col-span-12 lg:col-span-9">
		<article class="bg-white">
			<a href="f/f">
				<div class="grid grid-cols-12">
					<div class="col-span-12 md:col-span-7 imagen-rectangular relative">
					<img src="http://placeimg.com/1000/600/any" alt="" width="1000" height="600">
					<div class="flex md:hidden w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
						<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
					</div>
				</div>
				<div class="col-span-12 md:col-span-5">
					<div class="block md:hidden p-4 pb-6 bg-white rounded-sm relative">
						<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha
							tenido contacto con una persona contagiada, debe considerarse enfermo"</h3>
						<div class="flex items-start">
							<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
							<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
								sacrificio e irse a una residencia sanitaria"</p>
						</div>
					</div>

					<div class="hidden md:flex justify-between pt-4 pb-2 pl-4 pr-6">
						<span class="font-semibold cursor-pointer hover:text-gray-700">Mundo</span>
					</div>
					<div class="hidden md:block p-4 pb-6 bg-white rounded-sm relative" style="left: -2.25rem">
						<h3 class="font-semibold text-2xl xl:text-3xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha
							tenido contacto con una persona contagiada, debe considerarse enfermo"</h3>
						<div class="flex items-start">
							<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
							<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
								sacrificio e irse a una residencia sanitaria"</p>
							</div>
						</div>
					</div>
				</div>
			</a>
			</article>
			<div class="destacadas__secundarias grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
			<article class=" bg-white">
				<div class="imagen-rectangular relative">
					<img src="http://placeimg.com/1000/600/any" alt="">
					<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
						<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
					</div>
				</div>
				<div class="noticia__informacion">
					<div class="p-4 pb-6">
						<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
							contacto con una persona contagiada, debe considerarse enfermo"</h3>
						<div class="flex items-start">
							<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
							<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
								sacrificio e irse a una residencia sanitaria"</p>
						</div>
					</div>
				</div>
			</article>
			<article class=" bg-white">
				<div class="imagen-rectangular relative">
					<img src="http://placeimg.com/1000/600/any" alt="">
					<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
						<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
					</div>
				</div>
				<div class="noticia__informacion">
					<div class="p-4 pb-6">
						<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
							contacto con una persona contagiada, debe considerarse enfermo"</h3>
						<div class="flex items-start">
							<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
							<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
								sacrificio e irse a una residencia sanitaria"</p>
						</div>
					</div>
				</div>
			</article>
			<article class=" bg-white">
				<div class="imagen-rectangular relative">
					<img src="http://placeimg.com/1000/600/any" alt="">
					<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
						<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
					</div>
				</div>
				<div class="noticia__informacion">
					<div class="p-4 pb-6">
						<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
							contacto con una persona contagiada, debe considerarse enfermo"</h3>
						<div class="flex items-start">
							<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
							<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
								sacrificio e irse a una residencia sanitaria"</p>
						</div>
					</div>
				</div>
			</article>
		</div>
	</section>
	<section class="col-span-12 lg:col-span-3">
		@include('partials.timeline')
	</section>
</main>

<section class="mt-16 block">
	<h2 class="text-3xl mx-3 mb-4 font-semibold">
		<span class="subtitulo-primario text-blue-700 relative">Más</span> noticias
	</h2>
	<div class="grid grid-cols-12 gap-6 border-2 rounded border-blue-700 p-3 md:p-4">
		<article class="col-span-12 md:col-span-6 lg:col-span-3 noticia bg-white">
			<div class="imagen-rectangular relative">
				<img src="http://placeimg.com/1000/600/any" alt="">
				<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
					<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
				</div>
			</div>
			<div class="noticia__informacion">
				<div class="p-4 pb-6">
					<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
						contacto con una persona contagiada, debe considerarse enfermo"</h3>
					<div class="flex items-start">
						<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
						<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
							sacrificio e irse a una residencia sanitaria"</p>
					</div>
				</div>
			</div>
		</article>
		<article class="col-span-12 md:col-span-6 lg:col-span-3 noticia bg-white">
			<div class="imagen-rectangular relative">
				<img src="http://placeimg.com/1000/600/any" alt="">
				<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
					<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
				</div>
			</div>
			<div class="noticia__informacion">
				<div class="p-4 pb-6">
					<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
						contacto con una persona contagiada, debe considerarse enfermo"</h3>
					<div class="flex items-start">
						<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
						<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
							sacrificio e irse a una residencia sanitaria"</p>
					</div>
				</div>
			</div>
		</article>
		<article class="col-span-12 md:col-span-6 lg:col-span-3 noticia bg-white">
			<div class="imagen-rectangular relative">
				<img src="http://placeimg.com/1000/600/any" alt="">
				<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
					<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
				</div>
			</div>
			<div class="noticia__informacion">
				<div class="p-4 pb-6">
					<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
						contacto con una persona contagiada, debe considerarse enfermo"</h3>
					<div class="flex items-start">
						<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
						<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
							sacrificio e irse a una residencia sanitaria"</p>
					</div>
				</div>
			</div>
		</article>
		<article class="col-span-12 md:col-span-6 lg:col-span-3 noticia bg-white">
			<div class="imagen-rectangular relative">
				<img src="http://placeimg.com/1000/600/any" alt="">
				<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
					<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
				</div>
			</div>
			<div class="noticia__informacion">
				<div class="p-4 pb-6">
					<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
						contacto con una persona contagiada, debe considerarse enfermo"</h3>
					<div class="flex items-start">
						<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
						<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
							sacrificio e irse a una residencia sanitaria"</p>
					</div>
				</div>
			</div>
		</article>
		<article class="col-span-12 md:col-span-6 lg:col-span-3 noticia bg-white">
			<div class="imagen-rectangular relative">
				<img src="http://placeimg.com/1000/600/any" alt="">
				<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
					<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
				</div>
			</div>
			<div class="noticia__informacion">
				<div class="p-4 pb-6">
					<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
						contacto con una persona contagiada, debe considerarse enfermo"</h3>
					<div class="flex items-start">
						<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
						<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
							sacrificio e irse a una residencia sanitaria"</p>
					</div>
				</div>
			</div>
		</article>
		<article class="col-span-12 md:col-span-6 lg:col-span-3 noticia bg-white">
			<div class="imagen-rectangular relative">
				<img src="http://placeimg.com/1000/600/any" alt="">
				<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
					<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
				</div>
			</div>
			<div class="noticia__informacion">
				<div class="p-4 pb-6">
					<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
						contacto con una persona contagiada, debe considerarse enfermo"</h3>
					<div class="flex items-start">
						<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
						<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
							sacrificio e irse a una residencia sanitaria"</p>
					</div>
				</div>
			</div>
		</article>
		<article class="col-span-12 md:col-span-6 lg:col-span-3 noticia bg-white">
			<div class="imagen-rectangular relative">
				<img src="http://placeimg.com/1000/600/any" alt="">
				<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
					<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
				</div>
			</div>
			<div class="noticia__informacion">
				<div class="p-4 pb-6">
					<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
						contacto con una persona contagiada, debe considerarse enfermo"</h3>
					<div class="flex items-start">
						<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
						<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
							sacrificio e irse a una residencia sanitaria"</p>
					</div>
				</div>
			</div>
		</article>
		<article class="col-span-12 md:col-span-6 lg:col-span-3 noticia bg-white">
			<div class="imagen-rectangular relative">
				<img src="http://placeimg.com/1000/600/any" alt="">
				<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
					<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
				</div>
			</div>
			<div class="noticia__informacion">
				<div class="p-4 pb-6">
					<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
						contacto con una persona contagiada, debe considerarse enfermo"</h3>
					<div class="flex items-start">
						<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
						<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
							sacrificio e irse a una residencia sanitaria"</p>
					</div>
				</div>
			</div>
		</article>
	</div>
</section>

<section class="mt-16 block">
	<h2 class="text-3xl mx-3 mb-4 font-semibold">
		<span class="subtitulo-secundario subtitulo-1 relative">Otros</span> juegos
		<style>
			.subtitulo-1::before {
				background-color: #F56565;
			}
		</style>
	</h2>
	<div class="grid grid-cols-12 gap-6">
		<article class="col-span-12 md:col-span-6 lg:col-span-3 noticia bg-white">
			<div class="imagen-rectangular relative">
				<img src="http://placeimg.com/1000/600/any" alt="">
				<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
					<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
				</div>
			</div>
			<div class="noticia__informacion">
				<div class="p-4 pb-6">
					<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
						contacto con una persona contagiada, debe considerarse enfermo"</h3>
					<div class="flex items-start">
						<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
						<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
							sacrificio e irse a una residencia sanitaria"</p>
					</div>
				</div>
			</div>
		</article>
		<article class="col-span-12 md:col-span-6 lg:col-span-3 noticia bg-white">
			<div class="imagen-rectangular relative">
				<img src="http://placeimg.com/1000/600/any" alt="">
				<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
					<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
				</div>
			</div>
			<div class="noticia__informacion">
				<div class="p-4 pb-6">
					<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
						contacto con una persona contagiada, debe considerarse enfermo"</h3>
					<div class="flex items-start">
						<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
						<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
							sacrificio e irse a una residencia sanitaria"</p>
					</div>
				</div>
			</div>
		</article>
		<article class="col-span-12 md:col-span-6 lg:col-span-3 noticia bg-white">
			<div class="imagen-rectangular relative">
				<img src="http://placeimg.com/1000/600/any" alt="">
				<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
					<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
				</div>
			</div>
			<div class="noticia__informacion">
				<div class="p-4 pb-6">
					<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
						contacto con una persona contagiada, debe considerarse enfermo"</h3>
					<div class="flex items-start">
						<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
						<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
							sacrificio e irse a una residencia sanitaria"</p>
					</div>
				</div>
			</div>
		</article>
		<article class="col-span-12 md:col-span-6 lg:col-span-3 noticia bg-white">
			<div class="imagen-rectangular relative">
				<img src="http://placeimg.com/1000/600/any" alt="">
				<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
					<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
				</div>
			</div>
			<div class="noticia__informacion">
				<div class="p-4 pb-6">
					<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
						contacto con una persona contagiada, debe considerarse enfermo"</h3>
					<div class="flex items-start">
						<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
						<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
							sacrificio e irse a una residencia sanitaria"</p>
					</div>
				</div>
			</div>
		</article>
	</div>
</section>


<section class="mt-16 block">
	<h2 class="text-3xl mx-3 mb-4 font-semibold">
		<span class="subtitulo-recomendados relative text-yellow-600">Noticias</span> recomendadas
	</h2>
	<div class="grid grid-cols-12 gap-6 border-2 rounded border-yellow-600 p-3 md:p-4">
		<article class="col-span-12 md:col-span-6 lg:col-span-3 noticia bg-white">
			<div class="imagen-rectangular relative">
				<img src="http://placeimg.com/1000/600/any" alt="">
				<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
					<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
				</div>
			</div>
			<div class="noticia__informacion">
				<div class="p-4 pb-6">
					<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
						contacto con una persona contagiada, debe considerarse enfermo"</h3>
					<div class="flex items-start">
						<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
						<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
							sacrificio e irse a una residencia sanitaria"</p>
					</div>
				</div>
			</div>
		</article>
		<article class="col-span-12 md:col-span-6 lg:col-span-3 noticia bg-white">
			<div class="imagen-rectangular relative">
				<img src="http://placeimg.com/1000/600/any" alt="">
				<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
					<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
				</div>
			</div>
			<div class="noticia__informacion">
				<div class="p-4 pb-6">
					<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
						contacto con una persona contagiada, debe considerarse enfermo"</h3>
					<div class="flex items-start">
						<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
						<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
							sacrificio e irse a una residencia sanitaria"</p>
					</div>
				</div>
			</div>
		</article>
		<article class="col-span-12 md:col-span-6 lg:col-span-3 noticia bg-white">
			<div class="imagen-rectangular relative">
				<img src="http://placeimg.com/1000/600/any" alt="">
				<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
					<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
				</div>
			</div>
			<div class="noticia__informacion">
				<div class="p-4 pb-6">
					<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
						contacto con una persona contagiada, debe considerarse enfermo"</h3>
					<div class="flex items-start">
						<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
						<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
							sacrificio e irse a una residencia sanitaria"</p>
					</div>
				</div>
			</div>
		</article>
		<article class="col-span-12 md:col-span-6 lg:col-span-3 noticia bg-white">
			<div class="imagen-rectangular relative">
				<img src="http://placeimg.com/1000/600/any" alt="">
				<div class="flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white mx-auto absolute" style="bottom:0; left: 50%; transform: translateX(-50%)">
					<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
				</div>
			</div>
			<div class="noticia__informacion">
				<div class="p-4 pb-6">
					<h3 class="font-semibold text-xl cursor-pointer hover:text-gray-700">Doctor Ugarte: "Si uno ha tenido
						contacto con una persona contagiada, debe considerarse enfermo"</h3>
					<div class="flex items-start">
						<i class="fas fa-angle-double-right text-xs text-blue-700 ml-2 mt-4"></i>
						<p class="mt-3 ml-2 font-medium">Doctor Paris y medidas para frenar pandemia: "La gente tiene que hacer el
							sacrificio e irse a una residencia sanitaria"</p>
					</div>
				</div>
			</div>
		</article>
	</div>
</section>
@endsection

{{-- <div class="flex flex-col">
		@if(Route::has('login'))
		<div class="absolute top-0 right-0 mt-4 mr-4">
			@auth
			<a href="{{ url('/home') }}"
class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
@else
<a href="{{ route('login') }}"
	class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">{{ __('Login') }}</a>
@if (Route::has('register'))
<a href="{{ route('register') }}"
	class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
@endif
@endauth
</div>
@endif
<div class="min-h-screen flex items-center justify-center">
	<div class="flex flex-col justify-around h-full">
		<div>
			<h1 class="text-gray-600 text-center font-light tracking-wider text-5xl mb-6">
				{{ config('app.name', 'Laravel') }}
			</h1>
			<ul class="list-reset">
				<li class="inline pr-8">
					<a href="https://laravel.com/docs"
						class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
						title="Documentation">Documentation</a>
				</li>
				<li class="inline pr-8">
					<a href="https://laracasts.com"
						class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
						title="Laracasts">Laracasts</a>
				</li>
				<li class="inline pr-8">
					<a href="https://laravel-news.com"
						class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="News">News</a>
				</li>
				<li class="inline pr-8">
					<a href="https://nova.laravel.com"
						class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Nova">Nova</a>
				</li>
				<li class="inline pr-8">
					<a href="https://forge.laravel.com"
						class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Forge">Forge</a>
				</li>
				<li class="inline pr-8">
					<a href="https://vapor.laravel.com"
						class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Vapor">Vapor</a>
				</li>
				<li class="inline pr-8">
					<a href="https://github.com/laravel/laravel"
						class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="GitHub">GitHub</a>
				</li>
				<li class="inline pr-8">
					<a href="https://tailwindcss.com"
						class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase"
						title="Tailwind Css">Tailwind CSS</a>
				</li>
			</ul>
		</div>
	</div>
</div>
</div> --}}