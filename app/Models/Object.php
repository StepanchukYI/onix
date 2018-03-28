<?php

namespace App\Models;

use App\Http\Requests\ObjectRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Object
 *
 * Variable
 * @property integer  $id
 * @property integer  $category_id
 * @property string   $title
 * @property string   $slug
 * @property string   $description
 * @property string   $meta_title
 * @property string   $meta_keywords
 * @property string   $meta_description
 *
 * Relationships
 * @property Category $category
 * @property Resource $images
 */
class Object extends Model
{
	#region Properties

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'category_id',
		'title',
		'slug',
		'description',
		'meta_title',
		'meta_keywords',
		'meta_description',
	];

	/**
	 * @var array
	 */
	protected $appends = [ 'category', 'images' ];

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

		static::creating( function ( $model )
		{
			/** @var Object $model slug */
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

		static::addGlobalScope( 'objectAttribute', function ( Builder $builder )
		{
			$builder->with( 'objectAttributes' );
		} );
	}

	/**
	 * @param ObjectRequest $request
	 *
	 * @return mixed
	 */
	public static function createObject( $request )
	{
		return $object = static::create( [
			'category_id'      => $request->category_id,
			'title'            => $request->title,
			'description'      => $request->description,
			'meta_title'       => $request->meta_title,
			'meta_keywords'    => $request->meta_keywords,
			'meta_description' => $request->meta_description,
		] );

	}

	/**
	 * @param Object        $object
	 * @param ObjectRequest $request
	 *
	 * @return bool
	 */
	public static function updateObject( $object, $request )
	{
		return $object->update( [
			'category_id'      => $request->category_id,
			'title'            => $request->title,
			'description'      => $request->description,
			'meta_title'       => $request->meta_title,
			'meta_keywords'    => $request->meta_keywords,
			'meta_description' => $request->meta_description,
		] );

	}

	/**
	 * @return string
	 */
	public function getShortDescriptionAttribute()
	{
		return str_limit( $this->description, 150 );
	}

	#endregion

	#region Relationships

	/**
	 * @return Model|null|static
	 */
	public function getCategoryAttribute()
	{
		return Category::where('id', $this->category_id)->first();
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function images()
	{
		return $this->hasMany(ObjectImage::class,'object_id', 'id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function objectAttributes()
	{
		return $this->hasMany( ObjectAttribute::class );
	}


	#endregion
}
