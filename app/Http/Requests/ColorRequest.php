<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColorRequest extends FormRequest
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
			'description' => 'required|unique:colors,description',
			'background'  => 'required',
			'text'        => 'required',
		];

		if ($this->method() === 'PUT') {
			$rules['description'] = 'required|unique:colors,description,' . $this->route('color')->id;
		}

		return $rules;
	}

	public function messages()
	{
		return [
			'description.unique' => 'Esta descripcion ya está registrada'
		];
	}
}
