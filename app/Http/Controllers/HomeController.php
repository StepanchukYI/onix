<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$category = Category::main()->with( 'subCategories' )->get();

		return response()->render( 'pages.home.home' , [
				'categoryes' => $category
			] );
	}

	public function about()
	{
		return response()->render( 'pages.about.about' );
	}

	public function contacts()
	{
		return response()->render( 'pages.contacts.contacts' );
	}

	public function projects()
	{
		$category = Category::main()->with( 'subCategories' )->get();
		return response()->render( 'projects.projects' , [
			'categoryes' => $category
		] );
	}
}
