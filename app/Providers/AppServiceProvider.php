<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(ResponseFactory $factory)
    {
	    Schema::defaultStringLength(171);

	    $factory->macro('render', function ($template, $view_data = []) use ($factory) {

//            $view_data['menus'] = Cache::remember('menu', config('cache.cache_timeout.menu', 60), function () {
//                $menu = Menu::orderByPosition();
//            });
		    $view_data['menus'] = Menu::orderByPosition();
		    return view($template, $view_data);
	    });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
