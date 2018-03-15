<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 *
 * Variable
 * @property integer $id
 * @property integer $parent_id
 * @property string $title
 * @property string $slug
 * @property integer $position
 * @property string $page_position
 * @property string $image
 * @property string $style_class
 *
 * Relationship
 * @property array $pagePositionList
 * @property Menu $orderByPosition
 * @property Menu $mainMenu
 * @property Menu $submenu
 */
class Menu extends Model
{

	#region Properties

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'parent_id' ,
		'title' ,
		'slug' ,
		'position' ,
		'page_position',
		'image',
		'style_class'
	];

	protected $guarded = [];

	#endregion

	#region Function

	/**
	 * @inheritdoc
	 */
	public function getRouteKeyName()
	{
		return 'slug';
	}

	protected static function boot()
	{
		parent::boot();
		/** create all characteristics */
		static::creating( function( $model )
		{
			/** @var Menu $model slug */
			if ( !$model->slug ) {
				$model->slug = str_slug($model->title);
				$latestSlug = static::whereRaw("slug LIKE '$model->slug-%' or slug = '$model->slug'")->latest('id')->value('slug');
				if ($latestSlug) {
					$pieces = explode('-', $latestSlug);
					$number = intval(end($pieces));
					$model->slug .= '-' . ($number + 1);
				}
			}
		});
	}

	/**
	 * @param $request
	 * @return Menu
	 */
	public static function createMenu( $request )
	{
		return self::create( $request->only('parent_id', 'title', 'slug', 'position', 'page_position') );
	}

	/**
	 * @param $request
	 * @param Menu $menu
	 * @return boolean
	 */
	public static function updateMenu( $request , $menu )
	{
		return $menu->update( $request->only('parent_id', 'title', 'slug', 'position', 'page_position')  );
	}


	#endregion

	#region Relationships

	/**
	 * @return array
	 */
	public static function pagePositionList()
	{
		return [ 'navbar' , 'header' , 'footer' , 'category' , 'account' ];
	}

	/**
	 * @return Menu
	 */
	public static function orderByPosition()
	{
		return self::where( 'parent_id' , null )->with( "submenu.submenu" )->orderBy( 'position' )->get();
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function mainMenu()
	{
		return $this->belongsTo( Menu::class , 'parent_id' );
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\hasMany
	 */
	public function submenu()
	{
		return $this->hasMany( Menu::class , 'parent_id' )->orderBy( 'position' );
	}

	#endregion
}
