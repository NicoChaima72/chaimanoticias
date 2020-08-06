<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		$rules = [
			'description' => 'required|unique:categories,description',
			'color_id' => 'required'
		];

		if ($this->method() === 'PUT') {
			$rules['description'] = 'required|unique:categories,description,' . $this->route('category')->id;
		}

		return $rules;
	}

	public function messages()
	{
		return [
			'description.unique' => 'Esta categoria ya existe',
			'description.required' => 'Debes ingresar una descripcion',
			'color_id.required' => 'Debes seleccionar un color'
		];
	}
}
