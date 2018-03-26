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

		#region Category

		$categoryes = collect( [] );
		collect( [
			[
				'title'            => 'Модульные дома',
				'main_category_id' => null,
				'description'      => 'Моудльные дома',
				'meta_title'       => 'Моудльные дома',
				'meta_description' => 'Моудльные дома',
				'meta_keywords'    => 'Моудльные дома',
			],[
				'title'            => 'Вагончик для дачи',
				'main_category_id' => 1,
				'description'      => 'Вагончик для дачи',
				'meta_title'       => 'Вагончик для дачи',
				'meta_description' => 'Вагончик для дачи',
				'meta_keywords'    => 'Вагончик для дачи',
			],[
				'title'            => 'Мобильные дома',
				'main_category_id' => 1,
				'description'      => 'Мобильные дома',
				'meta_title'       => 'Мобильные дома',
				'meta_description' => 'Мобильные дома',
				'meta_keywords'    => 'Мобильные дома',
			],[
				'title'            => 'Дачные дома',
				'main_category_id' => 1,
				'description'      => 'Дачные дома',
				'meta_title'       => 'Дачные дома',
				'meta_description' => 'Дачные дома',
				'meta_keywords'    => 'Дачные дома',
			],[
				'title'            => 'Каркассное строительство',
				'main_category_id' => null,
				'description'      => 'Каркассное строительство',
				'meta_title'       => 'Каркассное строительство',
				'meta_description' => 'Каркассное строительство',
				'meta_keywords'    => 'Каркассное строительство',
			],[
				'title'            => 'Дачные дома',
				'main_category_id' => 5,
				'description'      => 'Дачные дома',
				'meta_title'       => 'Дачные дома',
				'meta_description' => 'Дачные дома',
				'meta_keywords'    => 'Дачные дома',
			],[
				'title'            => 'Сборные дома',
				'main_category_id' => 5,
				'description'      => 'Сборные дома',
				'meta_title'       => 'Сборные дома',
				'meta_description' => 'Сборные дома',
				'meta_keywords'    => 'Сборные дома',
			],[
				'title'            => 'Гостинныцы и турбазы',
				'main_category_id' => 5,
				'description'      => 'Гостинныцы и турбазы',
				'meta_title'       => 'Гостинныцы и турбазы',
				'meta_description' => 'Гостинныцы и турбазы',
				'meta_keywords'    => 'Гостинныцы и турбазы',
			],[
				'title'            => 'Жилые дома',
				'main_category_id' => 5,
				'description'      => 'Жилые дома',
				'meta_title'       => 'Жилые дома',
				'meta_description' => 'Жилые дома',
				'meta_keywords'    => 'Жилые дома',
			],[
				'title'            => 'Эко дома',
				'main_category_id' => 5,
				'description'      => 'Эко дома',
				'meta_title'       => 'Эко дома',
				'meta_description' => 'Эко дома',
				'meta_keywords'    => 'Эко дома',
			],[
				'title'            => 'Котеджи',
				'main_category_id' => 5,
				'description'      => 'Котеджи',
				'meta_title'       => 'Котеджи',
				'meta_description' => 'Котеджи',
				'meta_keywords'    => 'Котеджи',
			],[
				'title'            => 'Дома под ключ',
				'main_category_id' => 5,
				'description'      => 'Дома под ключ',
				'meta_title'       => 'Дома под ключ',
				'meta_description' => 'Дома под ключ',
				'meta_keywords'    => 'Дома под ключ',
			],[
				'title'            => 'Металоконструкции и промышленные помещения',
				'main_category_id' => null,
				'description'      => 'Металоконструкции и промышленные помещения',
				'meta_title'       => 'Металоконструкции и промышленные помещения',
				'meta_description' => 'Металоконструкции и промышленные помещения',
				'meta_keywords'    => 'Металоконструкции и промышленные помещения',
			],[
				'title'            => 'Металоконструкции',
				'main_category_id' => 13,
				'description'      => 'Металоконструкции',
				'meta_title'       => 'Металоконструкции',
				'meta_description' => 'Металоконструкции',
				'meta_keywords'    => 'Металоконструкции',
			],[
				'title'            => 'Шиномонтаж, СТО',
				'main_category_id' => 13,
				'description'      => 'Шиномонтаж, СТО',
				'meta_title'       => 'Шиномонтаж, СТО',
				'meta_description' => 'Шиномонтаж, СТО',
				'meta_keywords'    => 'Шиномонтаж, СТО',
			],[
				'title'            => 'Шиномонтаж, СТО',
				'main_category_id' => 13,
				'description'      => 'Шиномонтаж, СТО',
				'meta_title'       => 'Шиномонтаж, СТО',
				'meta_description' => 'Шиномонтаж, СТО',
				'meta_keywords'    => 'Шиномонтаж, СТО',
			],[
				'title'            => 'Модульные автосалоны',
				'main_category_id' => 13,
				'description'      => 'Модульные автосалоны',
				'meta_title'       => 'Модульные автосалоны',
				'meta_description' => 'Модульные автосалоны',
				'meta_keywords'    => 'Модульные автосалоны',
			],[
				'title'            => 'Происзводственные помещения',
				'main_category_id' => 13,
				'description'      => 'Происзводственные помещения',
				'meta_title'       => 'Происзводственные помещения',
				'meta_description' => 'Происзводственные помещения',
				'meta_keywords'    => 'Происзводственные помещения',
			],[
				'title'            => 'Склады, Ангары',
				'main_category_id' => 13,
				'description'      => 'Склады, Ангары',
				'meta_title'       => 'Склады, Ангары',
				'meta_description' => 'Склады, Ангары',
				'meta_keywords'    => 'Склады, Ангары',
			],[
				'title'            => 'Магазины',
				'main_category_id' => 13,
				'description'      => 'Магазины',
				'meta_title'       => 'Магазины',
				'meta_description' => 'Магазины',
				'meta_keywords'    => 'Магазины',
			],
		] )->each( function ( $data ) use ( &$categoryes )
		{
			$categoryes = $categoryes->merge( factory( \App\Models\Category::class, 1 )->create( $data ) );
		} );

		#endregion

	}
}
