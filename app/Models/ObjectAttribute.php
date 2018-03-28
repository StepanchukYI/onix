<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObjectAttribute extends Model
{
	#region Properties

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [ 'object_id' , 'attribute_id' , 'attribute_value_id' , 'created_at' , 'updated_at' ];

	#endregion



	#region Relationships

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function object()
	{
		return $this->belongsTo( Object::class );
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function attribute()
	{
		return $this->belongsTo( Attribute::class );
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function attributeValue()
	{
		return $this->belongsTo( AttributeValue::class );
	}


	#endregion
}
