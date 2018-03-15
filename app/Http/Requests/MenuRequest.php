<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

/**
 * Class MenuRequest
 *
 * Variable
 * @property string $title
 * @property string $slug
 * @property integer $parent_id
 * @property integer $position
 * @property string $page_position
 *
 */
class MenuRequest extends FormRequest
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
			'title' => 'required|string|max:128' ,
			'slug' => 'nullable|string|unique:menus|max:128' ,
			'parent_id' => 'nullable|integer' ,
			'position' => 'nullable|integer' ,
			'page_position' => 'nullable|string|max:128'
		];
	}

}
