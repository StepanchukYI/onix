<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AttributeValue
 *
 * Variable
 * @property integer $id
 * @property string $title
 * @property string $type
 * @property string $slug
 * @property string $created_at
 * @property string $updated_at
 */
class AttributeValue extends Model
{
	#region Properties

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [ 'attribute_id' , 'value' ];

	#endregion

	#region Function

	/**
	 * @param $data
	 * @return Attribute[]|null
	 */
	public static function createAttribute( $data )
	{
		return self::create( $data->all() );
	}

	#endregion

	#region Relationship

	public function attribute()
	{
		return $this->belongsTo(Attribute::class);
	}

	#endregion
}
