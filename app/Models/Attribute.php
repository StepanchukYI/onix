<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Attribute
 *
 * Variable
 * @property integer $id
 * @property string $title
 * @property string $type
 * @property string $slug
 * @property string $created_at
 * @property string $updated_at
 *
 *
 * Relationship
 * @property Object $object
 */
class Attribute extends Model
{
	#region Properties

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [ 'title' , 'type' , 'slug' , 'created_at' , 'updated_at' ];

	#endregion

	#region Function

	/**
	 * @param $data
	 *
	 * @return Attribute[]|null
	 */
	public static function createAttribute( $data )
	{
		return self::create( $data->all() );
	}

	#endregion

	#region Relationships

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
	 */
	public function object()
	{
		return $this->hasManyThrough( Object::class , ObjectAttribute::class , 'object_id' );
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function objectAttributes()
	{
		return $this->hasMany(ObjectAttribute::class);
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function attributeValues()
	{
		return $this->hasMany(AttributeValue::class);
	}

	#endregion
}
