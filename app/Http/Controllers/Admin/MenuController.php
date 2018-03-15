<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Auth;

class MenuController extends Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		return view( 'admin.menu.view' , [ 'menus' => Menu::all() ] );
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
		return view( 'admin.menu.create' , [
			'menusList'        => Menu::all() ,
			'pagePositionList' => Menu::pagePositionList() ,
			'menu'             => new Menu()
		] );
	}

	/**
	 * @param MenuRequest $request
	 * @return array
	 */
	public function store( MenuRequest $request )
	{
		return Menu::createMenu( $request ) ? [ 'menu' => true ] : [ 'menu' => false ];
	}

	/**
	 * @param Menu $menu
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function edit( Menu $menu )
	{
		return view( 'admin.menu.update' , [
			'menu'             => $menu ,
			'pagePositionList' => Menu::pagePositionList() ,
			'menusList'        => Menu::orderByPosition() ,
		] );
	}

	/**
	 * @param Menu $menu
	 * @param MenuRequest $request
	 * @return array
	 */
	public function update( Menu $menu, MenuRequest $request )
	{
		return [ 'menu' => Menu::updateMenu( $request , $menu ) ];
	}

	/**
	 * @param Menu $menu
	 * @return array
	 * @throws \Exception
	 */
	public function delete( Menu $menu )
	{
		if ( $menu->submenu ) {
			foreach ( $menu->submenu as $submenu ) {
				$submenu->delete();
			}
		}

		return $menu->delete() ? [ 'menu' => true ] : [ 'menu' => false ];
	}
}
