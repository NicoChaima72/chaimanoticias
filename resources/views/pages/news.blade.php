@extends('layouts.app')
@section('title', 'Principales noticias')
@section('description', 'Las últimas noticias del mundo mundial')
@section('content')
<nav class="py-5 lg:py-2 rounded w-full text-gray-600">
  <ol class="list-reset flex text-grey-dark">
    <li><a href="#">Principal</a></li>
    <li><span class="mx-2">/</span></li>
    <li><a href="#">Mundo</a></li>
  </ol>
</nav>
<main class="grid grid-cols-12 lg:mt-4">
	<section class="col-span-12 lg:col-span-9">
		<article class="bg-white">
			<div class="imagen-rectangular">
				<img src="http://placeimg.com/1000/600/any" alt="">
			</div>
			<div class="relative">
				<div class="bg-white w-11/12 mx-auto px-4 md:px-5 relative" style="top: -4rem;">
					<div class="flex justify-between py-4 lg:py-4">
						<span class="font-semibold cursor-pointer">Mundo</span>
					</div>
					<h1 class="font-semibold text-3xl md:text-4xl cursor-pointer">Doctor Ugarte: "Si uno ha
						tenido contacto con una persona contagiada, debe considerarse enfermo"</h1>
					<div class="rr-ss py-3"></div>
					<div class="space-y-4 leading-tight text-lg md:text-xl">
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, eligendi. Hic asperiores inventore aut enim tempora, error modi aliquam fugiat adipisci commodi provident ullam quo doloribus? Libero inventore error sint neque totam voluptatem corporis dignissimos consequuntur mollitia nulla, placeat perferendis!</p>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, eligendi. Hic asperiores inventore aut enim tempora, error modi aliquam fugiat adipisci commodi provident ullam quo doloribus? Libero inventore error sint neque totam voluptatem corporis dignissimos consequuntur mollitia nulla, placeat perferendis!</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum deleniti natus quidem molestias odit enim reprehenderit eveniet, sapiente cupiditate. Nulla sit aliquam saepe rem consectetur asperiores dignissimos harum commodi rerum consequatur animi aliquid distinctio neque eligendi alias, cumque optio a voluptatibus adipisci eos! A accusamus velit tenetur quaerat ut, natus magni dolore animi sapiente explicabo quia nulla. Libero, voluptas eveniet.</p>
					</div>
					<div class="mt-20">
						<div id="disqus_thread"></div>
						<script>
						(function() { // DON'T EDIT BELOW THIS LINE
						var d = document, s = d.createElement('script');
						s.src = 'https://chaimanoticias.disqus.com/embed.js';
						s.setAttribute('data-timestamp', +new Date());
						(d.head || d.body).appendChild(s);
						})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
					</div>
				</div>
			</div>
		</article>
		<section class="mt-16 block">
			<h2 class="text-3xl mx-3 mb-4 font-semibold">
				<span class="subtitulo-recomendados relative text-yellow-600">Noticias</span> recomendadas
			</h2>
			<div class="grid grid-cols-12 gap-6 border-2 rounded border-yellow-600 p-3 md:p-4">
				<article class="col-span-12 md:col-span-6 lg:col-span-4 noticia bg-white">
					<div class="noticia__imagen imagen-rectangular">
						<img src="http://placeimg.com/1000/700/any" alt="" class="object-cover">
						<div class="noticia__informacion__cabecera flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white">
							<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
							<i class="far fa-bookmark text-lg cursor-pointer hover:text-gray-700"></i>
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
				<article class="col-span-12 md:col-span-6 lg:col-span-4 noticia bg-white">
					<div class="noticia__imagen imagen-rectangular">
						<img src="http://placeimg.com/1000/600/any" alt="" width="1000" height="600">
						<div class="noticia__informacion__cabecera flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white">
							<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
							<i class="far fa-bookmark text-lg cursor-pointer hover:text-gray-700"></i>
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
				<article class="col-span-12 md:col-span-6 lg:col-span-4 noticia bg-white">
					<div class="noticia__imagen imagen-rectangular">
						<img src="http://placeimg.com/1000/600/any" alt="" width="1000" height="600">
						<div class="noticia__informacion__cabecera flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white">
							<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
							<i class="far fa-bookmark text-lg cursor-pointer hover:text-gray-700"></i>
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
				<article class="col-span-12 md:col-span-6 lg:col-span-4 noticia bg-white">
					<div class="noticia__imagen imagen-rectangular">
						<img src="http://placeimg.com/1000/600/any" alt="" width="1000" height="600">
						<div class="noticia__informacion__cabecera flex w-1/2 justify-between pt-3 pb-1 pl-4 pr-6 bg-white">
							<span class="font-semibold cursor-pointer hover:text-gray-700 text-sm">Mundo</span>
							<i class="far fa-bookmark text-lg cursor-pointer hover:text-gray-700"></i>
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
	</section>
	<section class="col-span-12 lg:col-span-3 pt-6 lg:pt-0">
		@include('partials.timeline')
	</section>
</main>
@endsection