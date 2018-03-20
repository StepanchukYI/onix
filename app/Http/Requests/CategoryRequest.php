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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
	    switch ($this->method()) {
		    case 'POST': {
			    return [
				    'title'            => 'required|string|max:255|unique:categories',
				    'slug'             => 'required|string|max:255|unique:categories',
				    'description'      => 'nullable|string|max:10000',
				    'meta_title'       => 'nullable|string|max:255',
				    'meta_description' => 'nullable|string|max:10000',
				    'meta_keywords'    => 'nullable|string|max:255',
				    'is_active'        => 'boolean',
			    ];
		    }
		    case 'PUT': {
			    return [
				    'title' => 'required|string|max:255|unique:categories',
				    'slug' => 'required|string|max:255|unique:categories,slug,' . $this->slug . ',slug',
				    'description' => 'nullable|string|max:10000',
				    'meta_title' => 'nullable|string|max:255',
				    'meta_description' => 'nullable|string|max:10000',
				    'meta_keywords' => 'nullable|string|max:255',
				    'is_active' => 'boolean',];
		    }
	    }
    }
}
