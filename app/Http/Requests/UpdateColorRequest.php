<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateColorRequest extends FormRequest
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
		return [
			'description' => 'required|unique:colors,description,' . $this->route('color')->id,
			'background'  => 'required',
			'text'        => 'required',
		];
	}

	public function messages()
	{
		return [
			'description.unique' => 'Esta descripcion ya está registrada'
		];
	}
}
