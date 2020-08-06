<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Color;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$categories = Category::with(['color'])->get();
		return view('admin.categories.index', ['categories' => $categories]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$colors = Color::get();
		return view('admin.categories.form', [
			'colors' => $colors,
			'category' => new Category,
			'action' => 'create'
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(CategoryRequest $request)
	{
		Category::create($request->all());

		return redirect()->route('admin.categories.index')
			->with('message', 'Categoria <strong>guardada</strong> correctamente')
			->with('icon', 'fas fa-check')
			->with('alert', 'alert-success');;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function show(Category $category)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Category $category)
	{
		$colors = Color::get();
		return view('admin.categories.form', [
			'colors' => $colors,
			'category' => $category,
			'action' => 'edit'
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function update(CategoryRequest $request, Category $category)
	{
		$category->update($request->all());

		return redirect()->route('admin.categories.index')
			->with('message', 'Categoria <strong>actualizada</strong> correctamente')
			->with('icon', 'fas fa-check')
			->with('alert', 'alert-success');;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Category $category)
	{
		$category->delete();

		return redirect()->route('admin.categories.index')
			->with('message', "La categoria <strong>$category->description</strong> se ha <strong>eliminado</strong>")
			->with('icon', 'fas fa-check')
			->with('alert', 'alert-warning');
	}
}
