<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Object;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	public function index( Category $category )
	{
		$breadcrumbs = collect( [
			[
				'title' => 'Главная',
				'slug'  => url( '/' )
			]
		] );

		$category->load( 'mainCategory' );
		if ( isset( $category->subCategories ) )
		{
			$subCatId = [];

			$category->subCategories->each( function ( $item ) use ( &$subCatId, &$breadcrumbs )
			{
				array_push( $subCatId, $item->id );
			} );

			if ( count( $subCatId ) > 0 )
			{
				$objects = $category->objectsQuery->whereIn( 'category_id', $subCatId )->get();
			} else
			{
				$objects = $category->objectsQuery->get();
			}

		} else
		{
			$objects = $category->objectsQuery->get();
		}
		if ( isset( $category->mainCategory ) )
		{
			$breadcrumbs[] = [
				'title' => $category->mainCategory->title,
				'slug'  => url( $category->mainCategory->slug )
			];
		}
		$breadcrumbs[] = [ 'title' => $category->title ];


		return response()->render( 'projects.categoryes.category', [
			'category'    => $category,
			'objects'     => $objects,
			'breadcrumbs' => $breadcrumbs
		] );
	}


	public function object( Object $object )
	{
		$breadcrumbs = collect( [
			[
				'title' => 'Главная',
				'slug'  => url( '/' )
			],
			[
				'title' => $object->category->title,
				'slug'  => url( $object->category->slug)
			]
		] );

		$object->load( 'images', 'objectAttributes' );
		$breadcrumbs[] = [ 'title' => $object->title ];

		return response()->render( 'pages.home.home', [
			'object'      => $object,
			'breadcrumbs' => $breadcrumbs
		] );
	}
}
