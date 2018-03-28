<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Object;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	public function index(Category $category)
	{
		return response()->render( 'pages.home.home' , [
			'categoryes' => $category
		] );
	}


	public function object(Object $object)
	{
		$object->load('images', 'objectAttributes');

		return response()->render( 'pages.home.home' , [
			'categoryes' => $object
		] );
	}
}
