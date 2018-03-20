<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ObjectRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		switch ( $this->method() )
		{
			case 'POST':
				{
					return [
						'category_id'      => 'required|integer',
						'title'            => 'required|string',
						'description'      => 'required|string|max:10000',
						'meta_title'       => 'required|string|max:255',
						'meta_keywords'    => 'required|string|max:1000',
						'meta_description' => 'required|string|max:10000',
					];
				}
			case 'PUT':
				{
					return [
						'title'            => 'required|string',
						'description'      => 'required|string|max:10000',
						'meta_title'       => 'required|string|max:255',
						'meta_keywords'    => 'required|string|max:1000',
						'meta_description' => 'required|string|max:10000',
					];
				}
		}
	}
}
