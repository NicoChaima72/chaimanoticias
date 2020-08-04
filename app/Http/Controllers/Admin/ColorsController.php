<?php

namespace App\Http\Controllers\Admin;

use App\Color;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateColorRequest;
use App\Http\Requests\UpdateColorRequest;
use Illuminate\Http\Request;

class ColorsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$colors = Color::get();
		return view('admin.colors.index')
			->with('colors', $colors);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.colors.form', [
			'color' => new Color,
			'action' => 'create'
		]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(CreateColorRequest $request)
	{
		Color::create($request->all());

		return redirect()->route('admin.colors.index')
			->with('message', 'Color <strong>guardado</strong> correctamente')
			->with('icon', 'fas fa-check')
			->with('alert', 'alert-success');
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Color $color)
	{
		return view('admin.colors.form', [
			'color' => $color,
			'action' => 'edit'
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(UpdateColorRequest $request, Color $color)
	{
		$color->update($request->all());

		return redirect()->route('admin.colors.index')
			->with('message', 'Color <strong>actualizado</strong> correctamente')
			->with('icon', 'fas fa-check')
			->with('alert', 'alert-success');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Color $color)
	{
		$color->delete();

		return redirect()->route('admin.colors.index')
			->with('message', "El color <strong>$color->description</strong> se ha <strong>eliminado</strong>")
			->with('icon', 'fas fa-check')
			->with('alert', 'alert-warning');
	}
}
