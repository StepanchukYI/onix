<?php

use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		#region Menu

		$menus = collect( [] );
		collect( [
			[
				'parent_id'     => null,
				'title'         => 'Главная',
				'slug'          => '/',
				'is_active'     => 1,
				'position'      => 1,
				'page_position' => 'navbar',
				'favicon'       => 'fas fa-home'
			],
			[
				'parent_id'     => null,
				'title'         => 'О нас',
				'slug'          => '/about',
				'is_active'     => 1,
				'position'      => 2,
				'page_position' => 'navbar',
				'favicon'       => 'fas fa-users'
			],
			[
				'parent_id'     => null,
				'title'         => 'Наши проекты',
				'slug'          => '/projects',
				'is_active'     => 1,
				'position'      => 3,
				'page_position' => 'navbar',
				'favicon'       => 'fas fa-clipboard-check'
			],
			[
				'parent_id'     => null,
				'title'         => 'Контакты',
				'slug'          => '/contacts',
				'is_active'     => 1,
				'position'      => 4,
				'page_position' => 'navbar',
				'favicon'       => 'fas fa-map-marker-alt'
			],
		] )->each( function ( $data ) use ( &$menus )
		{
			$menus = $menus->merge( factory( \App\Models\Menu::class, 1 )->create( $data ) );
		} );

		#endregion

	}
}
