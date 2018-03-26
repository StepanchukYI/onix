<?php

namespace App\Models;

use App\Http\Requests\CategoryRequest;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * Variable
 * @property integer $id
 * @property string  $title
 * @property string  $slug
 * @property string  $description
 * @property string  $meta_title
 * @property string  $meta_description
 * @property string  $meta_keywords
 * @property boolean $is_active
 *
 * Relationships
 * @property Object  $objects
 */
class Category extends Model
{
	#region Properties
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'title',
		'main_category_id',
		'slug',
		'description',
		'meta_title',
		'meta_description',
		'meta_keywords',
		'is_active'
	];

	/**
	 * @var array
	 */
	protected $appends = [ 'objects' ];
	#endregion

	#region Functions

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
		static::creating( function ( $model )
		{
			/** @var Category $model slug */
			if ( ! $model->slug )
			{
				$model->slug = str_slug( $model->title );
				$latestSlug  = static::whereRaw( "slug LIKE '$model->slug-%' or slug = '$model->slug'" )->latest( 'id' )->value( 'slug' );
				if ( $latestSlug )
				{
					$pieces      = explode( '-', $latestSlug );
					$number      = intval( end( $pieces ) );
					$model->slug .= '-' . ( $number + 1 );
				}
			}
		} );
	}

	/**
	 * @param CategoryRequest $request
	 *
	 * @return Category
	 */
	public static function createCategory( $request )
	{
		return self::create( [
			'title'            => $request->title,
			'slug'             => $request->slug,
			'description'      => $request->description,
			'meta_title'       => $request->meta_title,
			'meta_description' => $request->meta_description,
			'meta_keywords'    => $request->meta_keywords,
			'is_active'        => $request->is_active,
		] );
	}

	/**
	 * @param Category        $category
	 * @param CategoryRequest $request
	 *
	 * @return boolean
	 */
	public static function updateCategory( $category, $request )
	{
		return $category->update( [
			'title'            => $request->title,
			'slug'             => $request->slug,
			'description'      => $request->description,
			'meta_title'       => $request->meta_title,
			'meta_description' => $request->meta_description,
			'meta_keywords'    => $request->meta_keywords,
			'is_active'        => $request->is_active,
		] );
	}

	#endregion

	#region Relationships

	/**
	 * @param $query
	 *
	 * @return mixed
	 */
	public function scopeMain( $query )
	{
		return $query->where( 'main_category_id' , null );
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function subCategories()
	{
		return $this->hasMany( Category::class , 'main_category_id' );
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function mainCategory()
	{
		return $this->belongsTo( Category::class , 'main_category_id' );
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function getObjectsQueryAttribute()
	{
		return Object::where( 'category_id', $this->id );
	}
	#endregion
}
