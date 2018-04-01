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

		return response()->render( 'pages.home.home', [
			'categoryes' => $category,
			'title'      => 'Главная страница'
		] );
	}

	public function about()
	{
		$breadcrumbs = collect( [
			[
				'title' => 'Главная',
				'slug'  => url( '/' )
			],
			[
				'title' => "О нас"
			]
		] );

		return response()->render( 'pages.about.about', [
			'title'       => 'О нас',
			'breadcrumbs' => $breadcrumbs
		] );
	}

	public function contacts()
	{
		$breadcrumbs = collect( [
			[
				'title' => 'Главная',
				'slug'  => url( '/' )
			],
			[
				'title' => "Контакты"
			]
		] );

		return response()->render( 'pages.contacts.contacts', [
			'title'       => 'Контакты',
			'breadcrumbs' => $breadcrumbs
		] );
	}

	public function projects()
	{
		$breadcrumbs = collect( [
			[
				'title' => 'Главная',
				'slug'  => url( '/' )
			],
			[
				'title' => "Наши проекты"
			]
		] );
		$category    = Category::main()->with( 'subCategories' )->get();

		return response()->render( 'projects.projects', [
			'categoryes'  => $category,
			'title'       => 'Наши проекты',
			'breadcrumbs' => $breadcrumbs
		] );
	}
}
