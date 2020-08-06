<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\News;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Http\Request;

class NewsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$newsCollection = News::get();
		return view('admin.news.index', [
			'newsCollection' => $newsCollection
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$categories = Category::get();

		return view('admin.news.form', [
			'action' => 'create',
			'news' => new News,
			'categories' => $categories
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(CreateNewsRequest $request)
	{
		News::create($request->all());

		return redirect()->route('admin.news.index')
			->with('message', 'Noticia <strong>guardada</strong> correctamente')
			->with('icon', 'fas fa-check')
			->with('alert', 'alert-success');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\News  $news
	 * @return \Illuminate\Http\Response
	 */
	public function show(News $news)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\News  $news
	 * @return \Illuminate\Http\Response
	 */
	public function edit(News $news)
	{
		$categories = Category::get();

		return view('admin.news.form', [
			'action' => 'edit',
			'news' => $news,
			'categories' => $categories
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\News  $news
	 * @return \Illuminate\Http\Response
	 */
	public function update(UpdateNewsRequest $request, News $news)
	{
		$news->update($request->all());

		return redirect()->route('admin.news.index')
			->with('message', 'Noticia <strong>actualizada</strong> correctamente')
			->with('icon', 'fas fa-check')
			->with('alert', 'alert-success');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\News  $news
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(News $news)
	{
		$news->delete();

		return redirect()->route('admin.news.index')
			->with('message', "La noticia <strong>$news->title</strong> se ha <strong>eliminado</strong>")
			->with('icon', 'fas fa-check')
			->with('alert', 'alert-warning');
	}
}
